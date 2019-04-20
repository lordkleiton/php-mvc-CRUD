<?php 

    class SaveImg{
        private $imgName;
        private $imgPath;

        public function __construct($n, $in, $ip){
            echo "passei aqui"."<br>";
            $this->setImgName($n);
            $this->setImgPath($ip);
            echo $this->moveImg($in, $this->getImgPath())."<br>";
            var_dump($_FILES);
        }

        private function moveImg($n, $p){
            echo "passei aqui"."<br>";
            echo $n."<br>", $p."<br>";
            if (move_uploaded_file($n, $p)){
                echo 'bom'."<br>";
                return true;}
            else{
                echo 'ruim'."<br>";
                return false;
            }
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