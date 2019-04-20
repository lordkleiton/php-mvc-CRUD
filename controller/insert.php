<?php 
    include '../model/product.php';

    class Insert{
        private $produto;

        public function __construct(){
            $i = new Product();
            $this->setProduto($i);
            $this->criar();
        }

        private function setProduto($p){
            $this->produto = $p;
        }

        private function getProduto(){
            return $this->produto;
        }

        private function criar(){
            $p = $this->getProduto();
            $p->setNome($_POST['name']);
            $p->setValor(0);
            $p->setDesc($_POST['desc']);
            $p->setImg($_POST['img']);
            
            var_dump($p->insert($p->getNome(), $p->getValor(), $p->getDesc(), $p->getImg()));
        }
    }

    new Insert();
?>