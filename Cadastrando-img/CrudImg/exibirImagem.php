<?php
include('../conn.php');

$idImagem = $_GET['id'];

$stmt = $pdo->prepare('SELECT caminho FROM imagens WHERE id = ?');
$stmt->bindParam(1, $idImagem);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
    $caminhoImagem = $row['caminho'];
    $tipo = mime_content_type($caminhoImagem); // Obter o tipo MIME da imagem usando a função mime_content_type()
    header('Content-Type: ' . $tipo);
    readfile($caminhoImagem); // Ler e exibir o conteúdo do arquivo da imagem
    exit;
} else {
    echo 'Imagem não encontrada';
}
?>