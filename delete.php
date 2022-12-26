<?php
    include("conexion.php");
    $con=conectar();

    $id=$_GET['id'];

    $sql="DELETE FROM alumno  WHERE Id_alumno='$id'";
    $query=mysqli_query($con,$sql);

        if($query){
            Header("Location: alumno.php");
        }
?>