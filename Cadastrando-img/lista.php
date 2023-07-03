<?php
    require('conn.php');
    
    $stmt = $pdo->prepare('SELECT caminho from imagens');
    $stmt->execute();
    $imagens = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a {
        text-decoration: none;
        color: black;
    }

    ol { 
    counter-reset: item;
    list-style-type: none;
    }

    li { 
        display: block;
        list-style: none;
        padding-top: 70px;
    }

    li:before { 
        content: none;
    }

    .content {
        font-size: large;
        display: inline;
        
        margin: 0;
        max-height: 70px;
    }

    img {
        width: 203px;
        height: 184px;
    }

    #suco {
        text-align: top;
        position: absolute;
    }

    img, p {
        display: inline-block;
    }

</style>
<body>
    <div class="content">
        <?php
        foreach($imagens as $imagem){
            $caminhoImagem = $imagem['caminho'];
         echo   "<ol>
                <li>
                    <a href=''>
                        <img src=".$caminhoImagem.">
                        <p id='suco'>Suco De Uva 100ML Qtd Kcal</p>
                    </a>
                </li>
            </ol>";
        };
        ?>
</div>
</body>
</html>