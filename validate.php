<?php 
include('config.php');
#Se hara la validacion de los usuarios que hagan login dentro de nuestro proyecto
session_start(); #es para aperturar una sesion y no permitir que usuarios no registrados accedan a paginas que no tienen privilegios

$username=$_POST['username']; #asignacion de variables para que se guarden ahi de nuestra base de datos
$password=$_POST['password'];

$username=$mysqli->real_escape_string($username); #se manipulara el valor de esa variable en nuestra base de datos mysqli

$query="SELECT username, password FROM users WHERE username='$username' AND password='$password';"; #sentencia que va a conectarse con nuestra base de datos, y siiempre tienen que estar entre comillas y con un punto y coma al final
$result=$mysqli->query($query);

if($result->num_rows==1){
    $_SESSION['user']=$username;
    header('Location:dashboard.php');
}
else{
    header('Location:login.html');
}
?>