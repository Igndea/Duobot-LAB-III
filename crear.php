<?php
include("conexion.php");
$con=conectar();

$page=$_POST['page'];

if($page=="Cuentas"){

    $c_nombre=$_POST['c_nombre'];
    $c_codigo=$_POST['c_codigo'];


    $sql="INSERT INTO cuentas VALUES(NULL,'$c_nombre','$c_codigo')";

    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: Cuentas.php");
        
    }
}elseif($page=="Movimientos"){

    $id_empresa=$_POST['id_empresa'];
    $sql="SELECT ID_E from empresas WHERE e_nombre=$id_empresa";
    $query= mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($query);

    $id_forma_de_pago=$_POST['id_forma_de_pago'];
    $sql2="SELECT ID_fm from forma_de_pago WHERE fm_nombre=$id_forma_de_pago";
    $query2= mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_assoc($query2);

    $id_tipo_de_movimiento=$_POST['id_tipo_de_movimiento'];
    $sql3="SELECT ID_TM from tipos_de_movimientos WHERE tm_nombre=$id_tipo_de_movimiento";
    $query3= mysqli_query($con,$sql3);
    $row3 = mysqli_fetch_assoc($query3);

    $id_sub_cuenta=$_POST['id_sub_cuenta'];
    $sql4="SELECT ID_SC from subcuentas WHERE sc_nombre=$id_sub_cuenta";
    $query4= mysqli_query($con,$sql4);
    $row4 = mysqli_fetch_assoc($query4);


    $m_nombre=$_POST['m_nombre'];
    $m_fecha=$_POST['m_fecha'];
    $m_monto=$_POST['m_monto'];

    $sql="INSERT INTO movimientos VALUES(NULL,'$row','$row2','$row3','$row4','$m_nombre','$m_fecha','$m_monto')";
    //$sql="INSERT INTO movimientos VALUES(NULL,1,1,1,1,'mavt','06/10/2022',105)";
    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: Movimientos.php");
        
    }
}elseif($page=="FormasDePago"){
    $ID_fm=$_POST['ID_fm'];
    $fm_nombre=$_POST['fm_nombre'];
    $fm_descripcion=$_POST['fm_descripcion'];
    $fm_codigo=$_POST['fm_codigo'];

    $sql="INSERT INTO forma_de_pago VALUES(NULL,'$fm_nombre','$fm_descripcion','$fm_codigo')";

    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: FormasDePago.php");
        
    }
}elseif($page=="Empresas"){
    $ID_fm=$_POST['ID_E'];
    $e_nombre=$_POST['e_nombre'];
    $e_cuit=$_POST['e_cuit'];
    $e_condicion_iva=$_POST['e_condicion_iva'];

    $sql="INSERT INTO empresas VALUES(NULL,'$e_nombre','$e_cuit','$e_condicion_iva')";

    $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: Empresas.php");
        
    }
}

?>