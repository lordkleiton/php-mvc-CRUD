<?php 
    include '../config.php';
    include 'img.php';

    class Upload{
        private $arquivo;
        private $imgFileType;
        private $nome;
        private $uploadOk;
        private $f;

        public function __construct($file, $id, $prodName, $prodPrice, $prodDesc){
            $this->f = $file;
            $this->uploadOk = false;
            $this->setArquivo($this->f["img"]["name"]);
            $this->setImgType($this->getArquivo());
            $this->setNome();
            $this->checkOk();
            if ($this->uploadOk != false){
                if ($id != false){
                    new SaveImg($this->getNome(), $this->f["img"]["tmp_name"], IMGPATH.$this->getNome(), $id, $prodName, $prodPrice, $prodDesc);
                }
                else{
                    new SaveImg($this->getNome(), $this->f["img"]["tmp_name"], IMGPATH.$this->getNome(), false, $prodName, $prodPrice, $prodDesc);
                }
            }
        }

        private function checkOk(){
            $aux = $this->isImage($this->f["img"]["tmp_name"]);
            if ($aux){
                $aux = $this->fileExists();
                if ($aux){
                    $aux = $this->fileSize($this->f["img"]["size"]);
                    if ($aux){
                        $aux = $this->fileType();
                        if ($aux){
                            $this->uploadOk = true;
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

        private function getNome(){
            return $this->nome;
        }
        private function setNome(){
            $this->nome = md5(uniqid(rand(), true)).'.'.$this->getImgType();
        }

        public function isImage($t){
            return (getimagesize($t) != false) ? true : false;
        }

        public function fileExists(){
            return (file_exists($this->getArquivo())) ? false : true;
        }

        private function fileSize($s){
            return ($s > 500000) ? false : true;
        }

        private function fileType(){
            return ($this->getImgType() != "jpg" && $this->getImgType() != "png" && $this->getImgType() != "jpeg") ? false : true;
        }
    }

?>