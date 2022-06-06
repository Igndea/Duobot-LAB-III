<?php

include("conexion.php");
$con=conectar();

$ID_C=$_GET['id'];

$sql="SELECT * FROM cuentas WHERE ID_C='$ID_C'";
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
        <title>Actualizar CUENTAS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="ID_C" value="<?php echo $row['ID_C']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="c_nombre" placeholder="c_nombre" value="<?php echo $row['c_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="c_codigo" placeholder="c_codigo" value="<?php echo $row['c_codigo']  ?>">
                                <input type="hidden" name="page" value="Cuentas">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
