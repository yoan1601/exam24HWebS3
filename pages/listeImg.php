<?php 
    $listeImg = array("images\maison1.PNG", "images\maison2.PNG","images\maison3.PNG","images\maison4.PNG","images\maison5.PNG");

    function getIdImg($rep,$listeImg) {
        for ($i=0; $i < count($listeImg); $i++) { 
            if($rep == $listeImg[$i]) return $i;
        }
        return -1;
    }

?>