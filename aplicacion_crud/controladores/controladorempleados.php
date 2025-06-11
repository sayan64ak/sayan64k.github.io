<?php

include_once("modelos/empleado.php");

include_once("conexion.php");

bd::crearInstancia();

//creamos una clase

class ControladorEmpleados{

    public function inicio(){

        $empleados=(empleado::consultar());

        include_once("vistas/empleados/inicio.php");      
    }
    public function crear(){

        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            empleado::crear($nombre,$correo);
            header("Location:./?controlador=empleados&accion=inicio");
        }
        include_once("vistas/empleados/crear.php");
    }
    public function editar(){
       

        if($_POST){
            $id=$_POST['id'];
            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];

            empleado::editar($id,$nombre,$correo);

            header("Location:./?controlador=empleados&accion=inicio");
        }

         $id=$_GET['id'];

        $empleado=empleado::buscar($id);

        include_once("vistas/empleados/editar.php");    
    }

    public function borrar(){
        $id=$_GET['id'];

        empleado::borrar($id);
        header("Location:./?controlador=empleados&accion=inicio");
    }
}
?>