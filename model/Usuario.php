<?php
require_once '../lib/config.php';

class Usuario extends ActiveRecord\Model{
    public static $primary_key = 'cedula';
    public static $has_many = array(array('vehiculo'));
    
}

$user = new Usuario();
$user->cedula = "9287777";
$user->clave = "12345";
$user->nombre = "Jonny";
$user->apellido = "Luna";
$user->genero = "M";
$user->email = "jonnylunag@gmail.com";

try {
    UsuarioCrud::guardar($user);
    echo "TOTAL USUARIOS: ".UsuarioCrud::contar();

} catch (Excception $e) {
    echo "Error: ".$e->getMessage();
}