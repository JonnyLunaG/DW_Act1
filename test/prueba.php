<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaGuerrero/modelo/entidades/Usuario.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaGuerrero/modelo/entidades/Vehiculo.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/co_edu_udec_act1_jonnylunaGuerrero/modelo/crud/UsuarioCrud.php';

$user = new Usuario();
$user->cedula = "9287777";
$user->clave = "nomelase";
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
