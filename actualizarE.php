<?php

include("conexion.php");
$con=conectar();

$ID_E=$_GET['id'];

$sql="SELECT * FROM empresas WHERE ID_E='$ID_E'";
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
                    
                                <input type="hidden" name="ID_E" value="<?php echo $row['ID_E']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="e_nombre" placeholder="e_nombre" value="<?php echo $row['e_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="e_cuit" placeholder="e_cuit" value="<?php echo $row['e_cuit']  ?>">
                                <input type="text" class="form-control mb-3" name="e_condicion_iva" placeholder="e_condicion_iva" value="<?php echo $row['e_condicion_iva']  ?>">
                                <input type="hidden" name="page" value="Empresas">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>




