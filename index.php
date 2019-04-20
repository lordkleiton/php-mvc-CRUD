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