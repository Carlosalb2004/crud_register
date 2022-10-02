<?php
    include("config.php");                     //llamamos al archivo config.php ya que tiene la variable $msqli
    $sql = "SELECT * FROM clients";
    $query = mysqli_query($mysqli, $sql);       //asignamos la variable $query con la funcion mysqli_query
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Clientes</title>
        <link rel="stylesheet" type="text/css" href="style-clients.css?ts=<?=time()?>" />
        <meta name=""viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    </head>
<div>
    <?php
  include("home.php"); 
    ?>
</div>
<div>
    <body>
        
    <div class="users-form">
        <form action="register-clients.php" method="POST"> 
            <br>
                <h1>Ingresar datos del Cliente</h1>
                <input type="text" name="dni" placeholder="DNI" required>
                <input type="text" name="name" placeholder="NOMBRE" required>
                <input type="text" name="phone_number" placeholder="NUMERO TELEFONICO" required>
                <input type="text" name="address" placeholder="DIRECCION" required>              
                <input type="text" name="email" placeholder="EMAIL" required>           
                <input type="submit" value="Agregar">
        </form>
    </div>
    </body>
</div>
<div class="users-table">
    <br>
    <h2>Clientes registrados</h2>
    <br>
    <table>                     <!--creamos la tabla para mostrar los clientes creados-->
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>NOMBRE</th>
                <th>NUMERO DE TELEFONO</th>
                <th>DIRECCION</th>
                <th>EMAIL</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['dni'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['phone_number'] ?></td>
                    <td><?= $row['address'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><a href="update-clients.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></td>     
                    <td><a href="delete-clients.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></td> 
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <br>
</div>

</html>