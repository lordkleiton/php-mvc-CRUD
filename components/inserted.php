<h1 class="center">Este é o último produto que foi inserido</h1>
<div class="conteudo">
    <h1 class="center"><?php echo $linha["nomes"] ?></h1>
    <p>Código do produto:<br><?php echo $linha["id"] ?></p>
    <p>Preço:<br>R$ <?php echo $linha["valor"] ?></p>
    <p>Descrição do produto:<br><?php echo $linha["descricao"] ?></p>
    <img <?php echo "src=\"".IMGPATH.$linha["img"]."\"" ?> <?php echo "alt=\"".$linha["descricao"]."\"" ?>>
</div>