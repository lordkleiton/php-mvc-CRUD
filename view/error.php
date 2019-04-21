<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Erro</title>
</head>
<body>
    <?php 
        session_start();

        $msg = $_SESSION['error'];

        include '../components/error.php';
    ?>
</body>
</html>