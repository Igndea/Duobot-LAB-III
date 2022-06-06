<?php

include("conexion.php");
$con=conectar();

//echo $_GET["page"];
$page=$_GET['page'];

if($page=="Cuentas"){
    $ID_C=$_GET['id'];

    $sql="DELETE FROM cuentas WHERE ID_C='$ID_C'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cuentas.php");
    }
}

elseif($page=="Movimientos"){
    $ID_M=$_GET['id'];

    $sql="DELETE FROM movimientos WHERE ID_M='$ID_M'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Movimientos.php");
    }
}

elseif($page=="FormasDePago"){
    $ID_fm=$_GET['id'];

    $sql="DELETE FROM forma_de_pago WHERE ID_fm='$ID_fm'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: FormasDePago.php");
    }
}

elseif($page=="Empresas"){
    $ID_E=$_GET['id'];

    $sql="DELETE FROM empresas WHERE ID_E='$ID_E'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empresas.php");
    }
}

?>