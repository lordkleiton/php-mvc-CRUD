<?php 
    include '../model/product.php';

    session_start();

    var_dump($_POST);

    if (isset($_POST['keepImg'])){
        echo "tem";
        $a = new Product();

        $a->setNome($_POST['name']);
        $a->setValor($_POST['price']);
        $a->setDesc($_POST['desc']);
        $a->setImg($_SESSION['imgName']);

        $a->update($_SESSION['id'], $a->getNome(), $a->getValor(), $a->getDesc(), $a->getImg());
    }
    else{
        echo "num tem";
        include "upload.php";

        new Upload();

        echo "passei";
    }
?>