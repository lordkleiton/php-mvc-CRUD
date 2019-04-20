<?php 
    include '../config.php';
    include 'img.php';

    class Upload{
        private $arquivo;
        private $imgFileType;
        private $msg;
        private $nome;
        private $uploadOk;
        private $f;

        public function __construct($f, $id, $prodName, $prodPrice, $prodDesc){
            $this->setFile($f);
            $this->setArquivo($this->getFile()["img"]["name"]);
            $this->setImgType($this->getArquivo());
            $this->setNome();
            $this->checkOk();
            if ($this->getUpload() != false){
                if ($id != false){
                    new SaveImg($this->getNome(), $this->getFile()["img"]["tmp_name"], IMGPATH.$this->getNome(), $id, $prodName, $prodPrice, $prodDesc);
                }
                else{
                    new SaveImg($this->getNome(), $this->getFile()["img"]["tmp_name"], IMGPATH.$this->getNome(), false, $prodName, $prodPrice, $prodDesc);
                }
            }
        }

        private function setFile($img){
            $this->f = $img;
        }

        private function getFile(){
            return $this->f;
        }

        private function checkOk(){
            $aux = $this->isImage(true, $this->getFile()["img"]["tmp_name"]);
            if ($aux != true) {
                echo $this->getMsg();
            }
            else{
                $aux = $this->fileExists();
                if ($aux != true){
                    echo $this->getMsg();
                }
                else{
                    $aux = $this->fileSize($this->getFile()["img"]["size"]);
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

?>