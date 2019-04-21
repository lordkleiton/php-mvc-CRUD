<?php 
    include "../config.php";

    session_start();

    $_SESSION['imgName'] = $_SESSION['update'][0]['img'];
    $aux = $_SESSION['update'][0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Alterar produto</title>
</head>
<body>
    <a href="../index.php"><div class="btnVoltar"><</div></a>
    <?php 
        include '../components/update.php';
    ?>
</body>
</html>

