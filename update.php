<?php
    include("config.php");
    include("session.php");

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql="UPDATE users SET firstname='$firstname', middlename='$middlename', last_name='$lastname', birthday='$birthdate', username='$username', password='$password'
    WHERE username='$id'";

    if(mysqli_query($mysqli, $sql)){
        echo '<script language="javascript">';
        echo 'alert("Usuario modificado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
    else{
        echo '<script language="javascript">';
        echo 'alert("Usuario no modificado");';
        echo 'window.location="home.php";';
        echo '</script>';
    }
?>