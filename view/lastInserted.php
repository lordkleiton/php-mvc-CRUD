<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Produto inserido</title>
</head>
<body>
    <a href="../index.php"><div class="btnVoltar"><</div></a>
    <?php 
        include '../config.php';
        
        session_start();

        foreach($_SESSION['lastInserted'] as $linha){
            include '../components/inserted.php';
        }
    ?>
</body>
</html>