<div class="conteudo">
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
</div>

<div class="conteudo">
    <h1>Pesquisa de produto</h1>
    <form action="controller/select.php" method="GET">
        <label for="pesquisa">Digite o nome do produto: </label>
        <input type="text" name="searchFor" id="pesquisa" placeholder="Ex: Casa" required>
        <input type="submit" value="Pesquisar" name="submit">
    </form>
</div>

<div class="conteudo">
    <h1>Pesquisar todos os produtos</h1>
    <form action="controller/select.php" method="GET">
        <input type="text" name="all" id="pesquisa" value="all" hidden>
        <input type="submit" value="Pesquisar" name="submit">
    </form>
</div>

<div class="conteudo">
    <h1>Alterar produto</h1>
    <form action="controller/selectUpdate.php" method="POST">
        <label for="pesquisa">Digite o nome do produto: </label>
        <input type="number" name="id" id="pesquisa" placeholder="Ex: 10" required>
        <input type="submit" value="Alterar" name="submit">
    </form>
</div>