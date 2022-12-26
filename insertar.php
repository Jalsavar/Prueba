<?php
    include("conexion.php");
    $con=conectar();

    $Id_alumno=$_POST['Id_alumno'];
    $nombre=$_POST['nombre'];
    $apaterno=$_POST['apaterno'];
    $amaterno=$_POST['amaterno'];


    $sql="INSERT INTO alumno VALUES('$Id_alumno','$nombre','$apaterno','$amaterno')";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
        
    }else {
    }
?>