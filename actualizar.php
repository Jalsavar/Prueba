<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE Id_alumno='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Id_alumno" value="<?php echo $row['Id_alumno']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre(s)" value="<?php echo $row['nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="apaterno" placeholder="Apellido Paterno" value="<?php echo $row['apaterno']  ?>">
                                <input type="text" class="form-control mb-3" name="amaterno" placeholder="Apellido Materno" value="<?php echo $row['amaterno']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>