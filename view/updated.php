<?php 
    session_start();

    var_dump($_SESSION['updated']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Produto atualizado</title>
</head>
<body>
    <?php 
        session_start();
        
var_dump($_SESSION['results']);

        foreach($_SESSION['results'] as $linha){
            include '../components/search.php';
        }
    ?>
</body>
</html>