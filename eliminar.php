<?php

require "conexion.php";

$conn=conexion();

$id_matricula=$_GET['id'];

$sql="DELETE FROM alumnos WHERE id_alum='$id_matricula';";

$query=mysqli_query($conn,$sql);

$_SESSION['mensaje'] = 'Los datos fueron borrados';
$_SESSION['tipo_mensaje'] = 'danger';
    if ($query){
        header("location: index.php");
    }
?>