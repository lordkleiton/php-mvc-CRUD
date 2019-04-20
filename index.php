<?php 
    //include "config.php";
    //include_once "model/product.php";

    //$t = new Product();

    //var_dump($t->getAll());
    //var_dump($t->getLike('b'));
    //var_dump($t->getById(21));
    //var_dump($t->getLastInserted());
    //var_dump($t->delete(17));
    //var_dump($t->insert('owo', 125, 'owo', 'owo.uwu'));
    //var_dump($t->update(22, 'uwo', 420, 'uwu', 'uwu.owo'));

    //var_dump($t->getAll());
    //$t->setNome('oie');
    //$t->setValor('oiew');
    //echo $t->getNome();
    //echo $t->getValor();
    //var_dump($t->getAll());
?>

<form action="controller/upload.php" method="POST" enctype="multipart/form-data">
    <label for="nome">Insira o nome do produto: </label>
    <input type="text" name="name" id="nome" placeholder="Ex: Casa" required><br>
    <label for="preco">Insira o preço do produto: </label>
    <input type="number" name="price" id="preco" placeholder="Ex: 800000" required><br>
    <label for="descricao">Insira a descrição do produto: </label>
    <input type="text" name="desc" id="descricao" placeholder="Ex: Casa bonita" required><br>
    <label for="campoImg">Selecione uma imagem para o produto (PNG, JPG ou JPEG): </label>
    <input type="file" name="img" id="campoImg"><br>
    <input type="submit" value="Enviar" name="submit">
</form>

<form action="controller/upload.php" method="post">
    <input type="text" name="name">
    <input type="text" name="value">
    <input type="text" name="desc">
    <input type="text" name="img">
    <input type="submit" value="enviar">
</form>

