<?php

class Electrodomesticos {

    private $serial;
    public $tipo;
    public $almacenamientoEnergía;
    public bool $internet;

    public function encender(){
        echo "Encender Electrodoméstico";

    }
    public function apagar(){
        echo "Apagar Electrodoméstico";

}
function __construct(){
    $this -> serial = $this ->generateRandomString();
    
}

public function mostrarSerial()
{
    echo "Mi Serial es: ".$this ->serial;
}

private function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    //echo $randomString;
    return $randomString;
}


}













?>