<?php 
    include 'product.php';

    class SaveImg{
        public function __construct($imgName, $origName, $imgPath, $id, $prodName, $prodPrice, $prodDesc){
            $aux = $this->moveImg($origName, $imgPath);
            
            if ($aux != false){
                $p = new Product();

                $p->setNome($prodName);
                $p->setValor($prodPrice);
                $p->setDesc($prodDesc);
                $p->setImg($imgName);

                if ($id != false){
                    $p->update($id, $p->getNome(), $p->getValor(), $p->getDesc(), $p->getImg());
                }
                else{
                    $p->insert($p->getNome(), $p->getValor(), $p->getDesc(), $p->getImg());
                }
            }
        }

        private function moveImg($imgName, $p){
            if (move_uploaded_file($imgName, $p))
                return true;
            else
                return false;
        }
    }

?>