<?php
    include("config.php");
    include("session.php");

    $id_users=null; 
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="INSERT INTO users VALUES('$id_users','$firstname','$middlename','$lastname','$birthdate','$username','$password')";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        
        echo 'window.location="registration.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        
        echo 'window.location="registration.php";';
        echo '</script>';
    }
?>