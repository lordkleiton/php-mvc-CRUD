<?php 
    session_start();

    include '../model/product.php';

    $a = new Product();

    $_SESSION['deleted'] = $a->getById($_POST['id']);

    $a->delete($_POST['id']);

    $redirect = '../view/deleted.php';

    header('Location: '.$redirect);
    die();
?>