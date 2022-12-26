<?php
include('conexion.php');

        $host="localhost";
        $user="root";
        $pass="";
        $log= "loggin";

$usu=$_POST['usuario'];
$contrasena=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usu;


$con=mysqli_connect($host,$user,$pass,$log);


$sql="SELECT * FROM usuario where usuario='$usu' and clave='$contrasena'";
$res=mysqli_query($con,$sql);

$fila=mysqli_num_rows($res);

if($fila){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($res);
mysqli_close($con);
