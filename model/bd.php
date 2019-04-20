<?php 
    include "../config.php";

    class BD{
        private $pdo;

        public function __construct(){
            $this->conecta();
        }

        private function conecta(){
            $inst = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASSWORD);
            $this->setPDO($inst);
        }

        public function getPDO(){
            return $this->pdo;
        }

        public function setPDO($arg){
            $this->pdo = $arg;
        }

        public function getAll(){
            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QSELECTALL);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function getLike($nome){
            $nome = $nome.'%';

            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QSELECT);
            $stmt->execute(array(
                ':nome' => $nome
            ));

            return $stmt->fetchAll();
        }

        public function getById($id){
            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QSELECTBYID);
            $stmt->execute(array(
                ':id' => (int) $id
            ));

            return $stmt->fetchAll();
        }

        public function getLastInserted(){
            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QSELECTLASTINSERTED);
            $stmt->execute();

            return $stmt->fetchAll();
        }

        public function delete($id){
            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QDELETE);
            $stmt->execute(array(
                ':id' => (int) $id
            ));

            return true;
        }

        public function insert($nome, $valor, $desc, $img){
            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QINSERT);
            $stmt->execute(array(
                ':nomes' => $nome,
                ':valor' => (int) $valor,
                ':descricao' => $desc,
                ':img' => $img
            ));

            return true;
        }

        public function update($id, $nome, $valor, $desc, $img){
            $pdo = $this->getPDO();
            $stmt = $pdo->prepare(QUPDATE);
            $stmt->execute(array(
                ':id' => (int) $id,
                ':nomes' => $nome,
                ':valor' => (int) $valor,
                ':descricao' => $desc,
                ':img' => $img,
            ));

            return true;
        }
    }
?>