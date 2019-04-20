<?php 
    include '../model/upload.php';

    session_start();

    $redirect = '';

    $a = new Product();

    if ($_SESSION['doUpdate'] == true){
        $redirect = '../view/updated.php';

        new Upload($_FILES, $_SESSION['id'], $_POST['name'], $_POST['price'], $_POST['desc']);

        $_SESSION['updated'] = $a->getById($_SESSION['id']);
        $_SESSION['doUpdate'] = false;
    }
    else{
        $redirect = '../view/lastInserted.php';

        new Upload($_FILES, false, $_POST['name'], $_POST['price'], $_POST['desc']);

        $_SESSION['lastInserted'] = $a->getLastInserted();
    }

    header('Location: '.$redirect);
    die();
?>