<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Produto atualizado</title>
</head>
<body>
    <?php 
        include '../config.php';

        session_start();

        foreach($_SESSION['updated'] as $linha){
            include '../components/search.php';
        }
    ?>
</body>
</html>