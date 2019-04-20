<?php 
    include 'bd.php';

    class Product extends BD {
        public $nome;
        public $valor;
        public $desc;
        public $img;

        public function setNome($n){
            $this->nome = $n;
        }

        public function setValor($v){
            $this->valor = (int) $v;
        }

        public function setDesc($d){
            $this->desc = $d;
        }

        public function setImg($i){
            $this->img = $i;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getValor(){
            return $this->valor;
        }

        public function getDesc(){
            return $this->desc;
        }

        public function getImg(){
            return $this->img;
        }
    }
?>