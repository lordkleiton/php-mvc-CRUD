<?php 
    session_start();

    if (isset($_POST['keepImg'])){
        include '../model/product.php';
        
        $a = new Product();

        $a->setNome($_POST['name']);
        $a->setValor($_POST['price']);
        $a->setDesc($_POST['desc']);
        $a->setImg($_SESSION['imgName']);

        $a->update($_SESSION['id'], $a->getNome(), $a->getValor(), $a->getDesc(), $a->getImg());

        $redirect = '../view/updated.php';

        $_SESSION['updated'] = $a->getById($_SESSION['id']);

        header('Location: '.$redirect);
        die();
    }
    else{
        $_SESSION['doUpdate'] = true;

        include 'upload.php';
    }
?>