<?php
    include("config.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $costo = $_POST['costo'];
   
    $sql="UPDATE services SET nombre='$nombre', costo='$costo' WHERE id='$id'";    /*CODIGO EN SQL QUE ACTUALIZA LOS DATOS */ //falta cambiar

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Servicio modificado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Servicio no modificado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
?>