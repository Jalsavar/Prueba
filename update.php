<?php

include("conexion.php");
$con=conectar();

$Id_alumno=$_POST['Id_alumno'];
$nombre=$_POST['nombre'];
$apaterno=$_POST['apaterno'];
$amaterno=$_POST['amaterno'];

$sql="UPDATE alumno SET  nombre='$nombre',apaterno='$apaterno',amaterno='$amaterno' WHERE Id_alumno='$Id_alumno'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>