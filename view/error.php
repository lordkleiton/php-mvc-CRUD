<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Erro</title>
</head>
<body>
    <?php 
        session_start();

        foreach($_SESSION['error'] as $linha){
            include '../components/error.php';
        }
    ?>
</body>
</html>