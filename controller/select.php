<?php 
    include '../model/product.php';

    $redirect = '../view/search.php';

    $a = new Product();

    session_start();

    if (isset($_GET['all'])){
        $_SESSION['results'] = $a->getAll();
    }
    else{
        $_SESSION['results'] = $a->getLike($_GET['searchFor']);
    }
    
    header('Location: '.$redirect);
    die();
?>