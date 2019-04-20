<?php 
    include '../model/product.php';

    $redirect = '../view/update.php';

    $a = new Product();

    session_start();

    $_SESSION['update'] = $a->getById($_POST['id']);
    $_SESSION['id'] = $_POST['id'];

    header('Location: '.$redirect);
    die();
?>