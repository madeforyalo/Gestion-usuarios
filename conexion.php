<?php 
session_start();
function conexion(){
    $servidor="localhost";
    $usuarioBD="root";
    $passBD="";
    $nombreBD="algoritmo";
    $conn=mysqli_connect($servidor, $usuarioBD, $passBD, $nombreBD) or die ("no conectó");
    return $conn;
}

function todo(){
    $conn=conexion();
    $sqlMostrar= "SELECT * FROM alumnos;";                    
    $query=mysqli_query ($conn, $sqlMostrar);    
    return $query;
}

function buscar(){
    $conn=conexion();
    $buscar=$_GET['txtBuscar'];
    $sql= "SELECT * FROM alumnos WHERE id_alum=$buscar;";
    $query=mysqli_query ($conn, $sql);
    return $query;
} 

function actualizar(){
    $conn=conexion();
    $id_matricula=$_GET['id'];
    $sql="SELECT * FROM alumnos WHERE id_alum='$id_matricula';";
    $query=mysqli_query($conn, $sql);
    return $query;
}

function update(){
    $conn=conexion();
    $matricula=$_POST ['txtMatricula'];
    $nombre=$_POST ['txtNombre'];
    $apellido=$_POST ['txtapellido'];
    $dni=$_POST ['txtdni'];
    $fechaDeNac=$_POST ['txtFecha'];
    $direccion=$_POST ['txtDireccion'];
    $localidad=$_POST ['txtLocalidad'];
    $tel=$_POST ['txtTelefono'];

    $sql="UPDATE alumnos SET nombre='$nombre', apellido='$apellido', dni=$dni, fechaNac='$fechaDeNac', direccion='$direccion', localidad='$localidad', telefono=$tel
    WHERE id_alum='$matricula';";

    $query =mysqli_query($conn, $sql);
    return $query;
}
?>