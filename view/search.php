<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../components/head.html' ?>
    <title>Resultados da pesquisa</title>
</head>
<body>
    <a href="../index.php"><div class="btnVoltar"><</div></a>
    <?php 
        include '../config.php';

        session_start();
        
        foreach($_SESSION['results'] as $linha){
            include '../components/search.php';
        }
    ?>
</body>
</html>