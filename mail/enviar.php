
 <? php

$nombre= $_POST["nombre"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$company= $_POST["company"];
$mensaje= $_POST["mensaje"];

$body = "Nombre:". $nombre ."<br>Correo:" . $correo ."<br>telefono:" . $telefono .."<br>M ensaje:" . $mensaje;




echo "Hola Mundo".$nombre;


