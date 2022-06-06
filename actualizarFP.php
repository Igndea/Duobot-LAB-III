<?php

include("conexion.php");
$con=conectar();

$ID_fm=$_GET['id'];

$sql="SELECT * FROM forma_de_pago WHERE ID_fm='$ID_fm'";
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
                    
                                <input type="hidden" name="ID_fm" value="<?php echo $row['ID_fm']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="fm_nombre" placeholder="fm_nombre" value="<?php echo $row['fm_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="fm_descripcion" placeholder="fm_descripcion" value="<?php echo $row['fm_descripcion']  ?>">
                                <input type="text" class="form-control mb-3" name="fm_codigo" placeholder="fm_codigo" value="<?php echo $row['fm_codigo']  ?>">
                                <input type="hidden" name="page" value="FormasDePago">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
