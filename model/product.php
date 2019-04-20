<?php 
    include 'bd.php';

    class Product extends BD {
        private $nome;
        private $valor;
        private $desc;
        private $img;

        public function setNome($p){
            $this->$nome = $p;
        }

        public function setValor($p){
            $this->$valor = $p;
        }

        public function setDesc($p){
            $this->$desc = $p;
        }

        public function setImg($p){
            $this->$img = $p;
        }

        public function getNome(){
            return $this->$nome;
        }

        public function getValor(){
            return $this->$valor;
        }

        public function getDesc(){
            return $this->$desc;
        }

        public function getImg(){
            return $this->$img;
        }
    }
?>