<?php

include("conexion.php");
$con=conectar();

$page=$_POST['page'];

if($page=="Cuentas"){
    $ID_C=$_POST['ID_C']; 
    $c_nombre=$_POST['c_nombre'];
    $c_codigo=$_POST['c_codigo'];

    $sql="UPDATE cuentas SET c_nombre='$c_nombre',c_codigo='$c_codigo' WHERE ID_C='$ID_C'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Cuentas.php");
    }

}elseif($page=="Movimientos"){
    $ID_M=$_POST['ID_M'];
    $id_empresa=$_POST['id_empresa'];
    $id_forma_de_pago=$_POST['id_forma_de_pago'];
    $id_tipo_de_movimiento=$_POST['id_tipo_de_movimiento'];
    $id_sub_cuenta=$_POST['id_sub_cuenta'];
    $m_nombre=$_POST['m_nombre'];
    $m_fecha=$_POST['m_fecha'];
    $m_monto=$_POST['m_monto'];

    $sql="UPDATE movimientos SET id_empresa='$id_empresa',id_forma_de_pago='$id_forma_de_pago',id_tipo_de_movimiento='$id_tipo_de_movimiento',id_sub_cuenta='$id_sub_cuenta',m_nombre='$m_nombre',m_fecha='$m_fecha',m_monto='$m_monto' WHERE ID_M='$ID_M'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Movimientos.php");
    }

}elseif($page=="FormasDePago"){
    $ID_fm=$_POST['ID_fm'];
    $fm_nombre=$_POST['fm_nombre'];
    $fm_descripcion=$_POST['fm_descripcion'];
    $fm_codigo=$_POST['fm_codigo'];

    $sql="UPDATE forma_de_pago SET fm_nombre='$fm_nombre',fm_descripcion='$fm_descripcion',fm_codigo='$fm_codigo' WHERE ID_fm='$ID_fm'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: FormasDePago.php");
    }

}elseif($page=="Empresas"){
    $ID_E=$_POST['ID_E'];
    $e_nombre=$_POST['e_nombre'];
    $e_cuit=$_POST['e_cuit'];
    $e_condicion_iva=$_POST['e_condicion_iva'];

    $sql="UPDATE empresas SET e_nombre='$e_nombre',e_cuit='$e_cuit',e_condicion_iva='$e_condicion_iva' WHERE ID_E='$ID_E'";
    $query=mysqli_query($con,$sql);

    if($query){
        Header("Location: Empresas.php");
    }

}
?>