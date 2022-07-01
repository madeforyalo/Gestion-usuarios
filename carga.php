<?php
require "conexion.php";
$conn=conexion();
$matricula=$_POST ['txtMatricula'];
$nombre=$_POST ['txtNombre'];
$apellido=$_POST ['txtapellido'];
$dni=$_POST ['txtdni'];
$fechaDeNac=$_POST ['txtFecha'];
$direccion=$_POST ['txtDireccion'];
$localidad=$_POST ['txtLocalidad'];
$tel=$_POST ['txtTelefono'];

$sql="insert into alumnos(id_alum, nombre, apellido, dni, fechaNac, direccion, localidad, telefono)
values ($matricula, '$nombre', '$apellido', $dni, '$fechaDeNac', '$direccion', '$localidad', $tel);";

$query=mysqli_query($conn,$sql);

$_SESSION['mensaje'] = 'Los datos se cargaron con exitó!';
$_SESSION['tipo_mensaje'] = 'success';

if ($query){
    Header("location: index.php");
};

?>