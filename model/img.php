<?php 
    include 'product.php';

    class SaveImg{
        private $imgName;
        private $imgPath;

        public function __construct($n, $in, $ip){
            $this->setImgName($n);
            $this->setImgPath($ip);
            $aux = $this->moveImg($in, $this->getImgPath());
            if ($aux != false){
                $p = new Product();

                $p->setNome($_POST['name']);
                $p->setValor($_POST['price']);
                $p->setDesc($_POST['desc']);
                $p->setImg($this->getImgName());

                $p->insert($p->getNome(), $p->getValor(), $p->getDesc(), $p->getImg());
            }
        }

        private function moveImg($n, $p){
            if (move_uploaded_file($n, $p))
                return true;
            else
                return false;
        }

        private function getImgName(){
            return $this->imgName;
        }
        private function setImgName($p){
            $this->imgName = $p;
        }

        private function getImgPath(){
            return $this->imgPath;
        }
        private function setImgPath($p){
            $this->imgPath = $p;
        }
    }

?>