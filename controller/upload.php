<?php 
    include '../config.php';
    //include '../model/img.php';

    if (move_uploaded_file($_FILES["img"]["tmp_name"], IMGPATH)){
        echo 'bom'.$_FILES["img"]["tmp_name"]."<br>";
        return true;
    }
    else{
        echo 'ruim'.$_FILES["img"]["tmp_name"]."<br>";
        return false;
    }

    class Upload{
        private $arquivo;
        private $imgFileType;
        private $msg;
        private $nome;
        private $uploadOk;

        public function __construct(){
            $this->setArquivo($_FILES["img"]["name"]);
            $this->setImgType($this->getArquivo());
            $this->setNome();
            $this->checkOk();

            //new SaveImg($this->getNome(), $_FILES["img"]["tmp_name"], IMGPATH.$this->getNome());

            echo $this->moveImg($_FILES["img"]["tmp_name"], IMGPATH.$this->getNome());

            print_r($_FILES);
        }

        private function moveImg($n, $p){
            echo $n."<br>", $p."<br>";
            if (move_uploaded_file($n, $p)){
                echo 'bom'."<br>";
                return true;}
            else{
                echo 'ruim'."<br>";
                return false;
            }
        }

        private function checkOk(){
            $aux = $this->isImage(($_POST["submit"]), $_FILES["img"]["tmp_name"]);
            if ($aux != true) {
                echo $this->getMsg();
            }
            else{
                $aux = $this->fileExists();
                if ($aux != true){
                    echo $this->getMsg();
                }
                else{
                    $aux = $this->fileSize($_FILES["img"]["size"]);
                    if ($aux != true){
                        echo $this->getMsg();
                    }
                    else{
                        $aux = $this->fileType();
                        if ($aux != true){
                            echo $this->getMsg();
                        }
                        else{
                            $this->setUpload(true);
                        }
                    }
                }
            }
        }

        private function getArquivo(){
            return $this->arquivo;
        }
        private function setArquivo($p){
            $this->arquivo = IMGPATH.basename($p);
        }

        private function getImgType(){
            return $this->imgFileType;
        }
        private function setImgType($p){
            $this->imgFileType = strtolower(pathinfo($this->getArquivo(), PATHINFO_EXTENSION));
        }

        private function getMsg(){
            return $this->msg;
        }
        private function setMsg($p){
            $this->msg = $this->getMsg.$p;
        }

        private function getNome(){
            return $this->nome;
        }
        private function setNome(){
            $this->nome = md5(uniqid(rand(), true)).'.'.$this->getImgType();
        }

        private function getUpload(){
            return $this->uploadOk;
        }
        private function setUpload($p){
            $this->uploadOk = $p;
        }

        public function isImage($s, $t){
            if (isset($s)){
                $check = getimagesize($t);
                if($check !== false) {
                    return true;
                } 
                else {
                    $this->setMsg("Não é uma imagem. ");
                    return false;
                }
            }
        }

        public function fileExists(){
            if (file_exists($this->getArquivo())){
                $this->setMsg("O arquivo já existe. ");
                return false;
            }
            else return true;
        }

        private function fileSize($s){
            if ($s > 500000){
                $this->setMsg("O arquivo é muito grande. ");
                return false;
            }
            else return true;
        }

        private function fileType(){
            $type = $this->getImgType();
            if($type != "jpg" && $type != "png" && $type != "jpeg") {
                $this->setMsg("Somente JPG, PNG e JPEG permitidos. ");
                return false;
            }
            else return true;
        }

    }

    //new Upload();
?>