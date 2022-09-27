<?php
include("config.php");

    $id=null;                                   //Asignamos nuestro valores del html de index.php
    $dni = $_POST['dni'];
    $name = $_POST['name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];
    $email = $_POST['email'];                   //Hasta aquí Asignamos nuestro valores del html de index.php

    $sql="INSERT INTO clients VALUES('$id','$dni', '$name','$phone_number','$address','$email')";   //Asignamos los valores a nuestra tabla de nuestra base de datos 

    if(mysqli_query($mysqli, $sql)){                             //Usamos un condicinal para  aplicar la inserción para el ingreso de datos
        echo '<script language="javascript">';
        echo 'alert("Nuevo usuario agregado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
    else{                                                       //Un else si en caso no funciona la insercion
        echo '<script language="javascript">';
        echo 'alert("Usuario no creado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
?>