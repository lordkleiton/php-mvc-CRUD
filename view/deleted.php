<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Produto deletado</title>
</head>
<body>
    <a href="../index.php"><div class="btnVoltar"><</div></a>
    <?php 
        session_start();

        foreach($_SESSION['deleted'] as $linha){
            include '../components/delete.php';
        }
    ?>
</body>
</html>