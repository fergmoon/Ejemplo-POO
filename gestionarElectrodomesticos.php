<?php

echo "<b>Ejecutando gestionarelectrodomesticos.php</b><br>";
Include("computador.php");
include("lavadora.php");

$miLaptop = new Computadores();

echo "<h1>".$miLaptop ->nombre."</h1><br>";

$miLaptop -> mostrarSerial();
echo "<br>";
$miLaptop -> encender();
echo "<br>";
$miLaptop ->conectarWifi();
echo "<br>";
$miLaptop ->ejecutarPrograma();
echo "<br>";
$miLaptop ->almacenarinformacion();
echo "<br>";
$miLaptop ->apagar();


$miLavadora = new Lavadoras();
echo "<h1>".$miLavadora ->nombre."</h1><br>";
$miLavadora -> mostrarSerial();
echo "<br>";
$miLavadora -> encender();
echo "<br>";
$miLavadora ->lavar();
echo "<br>";
$miLavadora ->secar();
echo "<br>";
$miLavadora ->apagar();
