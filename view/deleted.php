<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Produto deletado</title>
</head>
<body>
    <?php 
        session_start();

        foreach($_SESSION['deleted'] as $linha){
            include '../components/delete.php';
        }
    ?>
</body>
</html>