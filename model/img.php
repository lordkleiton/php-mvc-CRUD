<?php 
    include 'product.php';

    class SaveImg{
        public function __construct($imgName, $origName, $imgPath, $id, $prodName, $prodPrice, $prodDesc){
            $aux = move_uploaded_file($origName, $imgPath);
            
            if ($aux != false){
                $p = new Product();

                $p->setNome($prodName);
                $p->setValor($prodPrice);
                $p->setDesc($prodDesc);
                $p->setImg($imgName);

                if ($id != false){
                    unlink(IMGPATH.$p->getById($id)[0]['img']);
                    $p->update($id, $p->getNome(), $p->getValor(), $p->getDesc(), $p->getImg());
                }
                else{
                    $p->insert($p->getNome(), $p->getValor(), $p->getDesc(), $p->getImg());
                }
            }
        }
    }

?>