<?php 
    session_start();

    include '../model/product.php';

    $a = new Product();

    $_SESSION['deleted'] = $a->getById($_POST['id']);

    $aux = $a->delete($_POST['id']);

    $redirect = '';
    
    if ($aux != 0){
        $redirect = '../view/deleted.php';
    }
    else {
        $redirect = '../view/error.php';
        $_SESSION['error'] = 'O registro informado não existe.';
    }

    header('Location: '.$redirect);
    die();
?>