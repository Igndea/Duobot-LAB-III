<?php

include("conexion.php");
$con=conectar();

$ID_M=$_GET['id'];

$sql="SELECT * FROM Movimientos WHERE ID_M='$ID_M'";
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
                    
                                <input type="hidden" name="ID_M" value="<?php echo $row['ID_M']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="id_empresa" placeholder="id_empresa" value="<?php echo $row['id_empresa']  ?>">
                                <input type="text" class="form-control mb-3" name="id_forma_de_pago" placeholder="id_forma_de_pago" value="<?php echo $row['id_forma_de_pago']  ?>">
                                <input type="text" class="form-control mb-3" name="id_tipo_de_movimiento" placeholder="id_tipo_de_movimiento" value="<?php echo $row['id_tipo_de_movimiento']  ?>">
                                <input type="text" class="form-control mb-3" name="id_sub_cuenta" placeholder="id_sub_cuenta" value="<?php echo $row['id_sub_cuenta']  ?>">
                                <input type="text" class="form-control mb-3" name="m_nombre" placeholder="m_nombre" value="<?php echo $row['m_nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="m_fecha" placeholder="m_fecha" value="<?php echo $row['m_fecha']  ?>">
                                <input type="text" class="form-control mb-3" name="m_monto" placeholder="m_monto" value="<?php echo $row['m_monto']  ?>">
                                <input type="hidden" name="page" value="Movimientos">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
