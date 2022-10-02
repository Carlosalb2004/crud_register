<?php 
    include("config.php");  
    include("session.php");                                     //incluimos al archivo config.php ya que tiene la variable $msqli

    $id=$_GET['id'];                                            // Creamos nueva variable con un valor de arreglo                      //asignamos la variable $query con la funcion mysqli_query
?>

<!DOCTYPE html>
<html lang="en">
    <head>                                                                   <!--creamos nuestro head-->
        <meta charset="UTF-8">                                                               
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-users.css?ts=<?=time()?>" />   <!--Asignamos nuestro CSS, para el diseño-->
        <title>Editar Usuario</title>
        
    </head>
    <div>
    <?php
  include("home.php"); 
    ?>
  </div>
    <body>
        <div class="users-form">                                                                
            <form action="edit-users.php" method="POST">                                              <!--creamos nuestro formulario para editar los datos de los clientes creados-->
                <?php
                    $result=mysqli_query($mysqli, "SELECT * FROM users WHERE username='$id'");
                    while($row=mysqli_fetch_array($result))
                    {
                        echo "<h1>Editar datos del Usuario</h1>";
                        echo "<input type='hidden' name='id' value='{$row['username']}' required>";
                        echo "<p>Actualizar Nombre</p>";
                        echo "<input type='text' name='firstname' value='{$row['firstname']}' required>";
                        echo "<p>Actualizar Segundo Nombre</p>";
                        echo "<input type='text' name='middlename' value='{$row['middlename']}' required>";
                        echo "<p>Actualizar Apellido</p>";
                        echo "<input type='text' name='lastname' value='{$row['last_name']}' required>";
                        echo "<p>Actualizar Fecha de Cumpleaños</p>";
                        echo "<input type='date' name='birthdate' value='{$row['birthday']}' required>";
                        echo "<p>Actualizar Usuario</p>";
                        echo "<input type='text' name='username' value='{$row['username']}' required>";
                        echo "<p>Actualizar Password</p>";
                        echo "<input type='password' name='password' value='{$row['password']}' required>";
                    }
                ?>
                <input type="submit" value="Actualizar">
            </form>
        </div>
    </body>
</html>