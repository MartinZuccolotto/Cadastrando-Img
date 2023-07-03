<?php
include('../conn.php');

$caminhoImg = $_POST['img'];

$img = $pdo->prepare('INSERT INTO imagens (caminho) VALUES (?)');
$img->bindParam(1, $caminhoImg);
$img->execute();
?>