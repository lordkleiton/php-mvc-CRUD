<?php 
    include "../config.php";

    class BD{
        private $pdo;

        public function __construct(){
            $this->conecta();
        }

        private function conecta(){
            $this->pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSWORD);
        }

        public function getPDO(){
            return $this->pdo;
        }
        public function setPDO($arg){
            $this->pdo = $arg;
        }

        public function getAll(){
            $stmt = $this->pdo->prepare(QSELECTALL);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function getLike($nome){
            $nome = $nome.'%';

            $stmt = $this->pdo->prepare(QSELECT);
            $stmt->execute(array(
                ':nome' => $nome
            ));

            return $stmt->fetchAll();
        }

        public function getById($id){
            $stmt = $this->pdo->prepare(QSELECTBYID);
            $stmt->execute(array(
                ':id' => (int) $id
            ));

            return $stmt->fetchAll();
        }

        public function getLastInserted(){
            $stmt = $this->pdo->prepare(QSELECTLASTINSERTED);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function delete($id){
            $stmt = $this->pdo->prepare(QDELETE);
            $stmt->execute(array(
                ':id' => (int) $id
            ));

            return $stmt->rowCount();
        }

        public function insert($nome, $valor, $desc, $img){
            $stmt = $this->pdo->prepare(QINSERT);
            $stmt->execute(array(
                ':nomes' => $nome,
                ':valor' => (int) $valor,
                ':descricao' => $desc,
                ':img' => $img
            ));

            return $stmt->rowCount();
        }

        public function update($id, $nome, $valor, $desc, $img){
            $stmt = $this->pdo->prepare(QUPDATE);
            $stmt->execute(array(
                ':id' => (int) $id,
                ':nomes' => $nome,
                ':valor' => (int) $valor,
                ':descricao' => $desc,
                ':img' => $img,
            ));

            return $stmt->rowCount();
        }
    }
?>