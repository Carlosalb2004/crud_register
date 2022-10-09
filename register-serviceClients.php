<?php
    include("config.php");  /* Se llama al archivo config.php*/
    $id_sc=null;
    $id_u = $_POST['id_users'];
    $id_c = $_POST['id_clients'];
    $id_s = $_POST['id_service'];
    $monto = $_POST['monto'];
    $fecha= date('Y-m-d H:i:s');

    $sql="INSERT INTO serviceclients(id_sc,id_u,id_c,id_s,monto,fecha) VALUES('$id_sc','$id_u', '$id_c','$id_s','$monto','$fecha')";     /*CODIGO EN SQL QUE INGRESA EL ID, NOMBRE Y COSTO A LA BASE DE DATOS DENOMINADA servicios*/

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'window.location="registration-serviceClients.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'window.location="registration-serviceClients.php";';
        echo '</script>';
    }
?>