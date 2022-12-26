<?php
    function conectar(){
        $host="localhost";
        $user="root";
        $pass="";
        $log= "loggin";

        $bd="escuela";

        $con=mysqli_connect($host,$user,$pass);

        mysqli_select_db($con,$bd);

        return $con;
    }
?>