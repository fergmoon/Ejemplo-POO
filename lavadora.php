<?php

//require("electrodoméstico.php");  Toca eliminarlo por q esta declarado tambien en computador

class Lavadoras extends Electrodomesticos {

    public $nombre ="Lavadora";
    public $marca;
    public $secadora;
    private int $vidaUtil;

    public function lavar(){
        echo "Lavar Ropa";

    }
    public function secar(){
        echo "Secar Ropa";

}
    

}













?>