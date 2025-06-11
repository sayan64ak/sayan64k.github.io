<?php

class empleado{

    public $id;
    public $nombre;
    public $correo;

    public function __construct($id,$nombre,$correo){
        $this->id=$id;
        $this->nombre=$nombre;
        $this->correo=$correo;
    }
    public static function consultar(){
        $listaempleados=[];
        $conexionbd=bd::crearInstancia();
        $sql=$conexionbd->query("SELECT * FROM empleados");

        foreach($sql->fetchAll() as $empleado){
           $listaempleados[]=new empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
        }
        return $listaempleados;
    }

    public static function crear($nombre,$correo){

        $conexionbd=bd::crearInstancia();

        $sql=$conexionbd->prepare("INSERT INTO empleados(nombre,correo)values (?,?)");
        $sql->execute(array($nombre,$correo));
    }
    public static function borrar($id){

        $conexionbd=bd::crearInstancia();

        $sql=$conexionbd->prepare("DELETE FROM empleados WHERE id=?");
        $sql->execute(array($id));
    }

    public static function buscar($id){

        $conexionbd=bd::crearInstancia();

        $sql=$conexionbd->prepare("SELECT * FROM empleados WHERE id=?");
        $sql->execute(array($id));
        $empleado=$sql->fetch();
        return new empleado($empleado['id'],$empleado['nombre'],$empleado['correo']);
    }

    public static function editar($id,$nombre,$correo){
        $conexionbd=bd::crearInstancia();

        $sql=$conexionbd->prepare("UPDATE empleados SET nombre=?, correo=? WHERE id=?");
        $sql->execute(array($nombre,$correo,$id));
    }
}

?>