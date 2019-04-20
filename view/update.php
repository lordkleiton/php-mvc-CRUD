<?php 
    include "../config.php";

    session_start();

    $_SESSION['imgName'] = $_SESSION['update'][0]['img'];
    $aux = $_SESSION['update'][0];
    var_dump($_SESSION['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Alterar produto</title>
</head>
<body>
    <div class="conteudo">
        <form action="../controller/update.php" method="POST" enctype="multipart/form-data">
            <label for="nome">Insira o nome do produto: </label>
            <input type="text" name="name" id="nome" placeholder="Ex: Casa" <?php echo "value=\"".$aux['nomes']."\"" ?> required><br>
            <label for="preco">Insira o preço do produto: </label>
            <input type="number" name="price" id="preco" placeholder="Ex: 8.50" <?php echo "value=\"".$aux['valor']."\"" ?> required><br>
            <label for="descricao">Insira a descrição do produto: </label>
            <input type="text" name="desc" id="descricao" placeholder="Ex: Casa bonita" <?php echo "value=\"".$aux['descricao']."\"" ?> required><br>
            <label for="campoImg">Selecione uma imagem para o produto (PNG, JPG ou JPEG): </label>
            <input type="file" name="img" id="campoImg"><br>
            <label for="check">Manter imagem atual?</label>
            <input type="checkbox" name="keepImg" id="check"><br>
            <img <?php echo "src=\"".IMGPATH.$aux["img"]."\"" ?> <?php echo "alt=\"".IMGPATH.$aux["descricao"]."\"" ?>><br>
            <input type="submit" value="Enviar" name="submit">
        </form>
    </div>
</body>
</html>

