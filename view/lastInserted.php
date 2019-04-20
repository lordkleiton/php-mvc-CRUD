<?php 
    session_start();

    var_dump($_SESSION['lastInserted']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Produto inserido</title>
</head>
<body>
    <?php 
        session_start();

        var_dump($_SESSION['lastInserted']);
    ?>
</body>
</html>