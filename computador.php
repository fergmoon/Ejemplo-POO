<?php

require("electrodomestico.php");

class Computadores extends Electrodomesticos {

    public $nombre ="Computador";
    public $marca;
    public $ram;
    public int $cpu;
    private $macAdress;

    public function conectarWifi(){
        echo "Conectando Wifi";

    }
    public function ejecutarPrograma(){
        echo "Ejecutar programa";

}
    public function almacenarinformacion(){
        echo "Almacenar Información";

}

}











?>