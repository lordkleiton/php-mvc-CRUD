<?php 
    include '../model/product.php';

    $a = new Product();

    if (isset($_GET['all'])){
        $_SESSION['results'] = $a->getAll();
    }
    else{
        $_SESSION['results'] = $a->getLike($_GET['searchFor']);
    }

    var_dump($_SESSION);
?>