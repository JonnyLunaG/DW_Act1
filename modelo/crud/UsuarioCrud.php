<?php
class UsuarioCrud{

    public static function guardar($u){
        try{
            $u->save();

        }catch(Exception $error){
            throw new Exception("Error el usuario no pudo ser guardado<br>Detalles: ".$error->getMessage());
        }           
    }

    public static function buscar($cc){
        try {
            return Usuario::find($cc);
        } catch (Exception $error) {
            throw new Exception("Error al buscar usuario<br>Detalles: ".$error->getMessage());
        }
    }

    public static function editar($u){
        try {
            $u->save();
        } catch (Exception $error) {
            throw new Exception("Error al editar el ususario<br>Detalles: ".$error->getMessage());
        }
    }

    public static function eliminar($u){
        try {
            $u->delete();
        } catch (Exception $error) {
            throw new Exception("Error al eliminar  usuario<br>Detalles: ".$error->getMessage());
        }
    }

    public static function contar(){
        try {
            return Usuario::count();
        } catch (Exception $error) {
            throw new Exception("Error al contar los usuarios<br>Detalles: ".$error->getMessage());
        }
    }

}

