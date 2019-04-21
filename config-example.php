<?php 

    //dados de acesso ao bd
    define('HOST', 'endereço');
    define('USER', 'seuUsuario');
    define('DB', 'nomeDoSeuBanco');
    define('PASSWORD', 'suaSenha');

    //queries
    define('QDELETE', 'DELETE FROM produtos WHERE id = :id');
    define('QINSERT', 'INSERT INTO produtos (nomes, valor, descricao, img) VALUES (:nomes, :valor, :descricao, :img)');
    define('QSELECT', 'SELECT * FROM produtos WHERE nomes LIKE :nome');
    define('QSELECTALL', 'SELECT * FROM produtos');
    define('QSELECTBYID', 'SELECT nomes, valor, descricao, img FROM produtos WHERE id = :id');
    define('QSELECTLASTINSERTED', 'SELECT * FROM produtos WHERE id = (SELECT max(id) AS lastid FROM produtos)');
    define('QUPDATE', 'UPDATE produtos SET nomes = :nomes, valor = :valor, descricao = :descricao, img = :img WHERE id = :id');

    //pasta de imgs
    define("IMGPATH", '../upload/img/');

?>