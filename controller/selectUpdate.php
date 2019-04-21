<?php 
    include '../model/product.php';

    $a = new Product();

    session_start();

    $_SESSION['update'] = $a->getById($_POST['id']);

    if ($_SESSION['update']){
        $redirect = '../view/update.php';

        $_SESSION['id'] = $_POST['id'];
    }
    else{
        $redirect = '../view/error.php';

        $_SESSION['error'] = 'O registro informado não existe.';
    }
    
    header('Location: '.$redirect); 
    die();
?>