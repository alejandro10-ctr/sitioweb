<?php


$host="localhost";
$db="sitio";
$usuario="root";
$contraseña="";

try{
     $conexion=new PDO("mysql:host=$host;dbname=$db",$usuario,$contraseña);
     if($conexion){echo "";}



}catch( Exception $ex){
 
    echo $ex->getMessage();

}


?>
