<?php
    include("config.php");
    $sql = "SELECT * FROM services";  //cambiado a service
    $query = mysqli_query($mysqli, $sql);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Inicio de Sesion</title>
        <link rel="stylesheet" href="style-service.css" href="style-service.css?ts=<?=time()?>">    <!--se llaman a los estilos en el archivo style.css-->
        <meta name=""viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        <title>REGISTRO DE SERVICIOS</title>
    </head>
    <div>
    <?php
  include("home.php"); 
    ?>
  </div>
<div>
    <body>
        <div class="users-form">
        <form action="register-service.php" method="POST">
                <h1>REGISTRO DE SERVICIOS</h1>
                <input type="text" name="nombre" placeholder="Nombre del Servicio" required> 
                <input type="text" name="costo" placeholder="Costo del Servicio" required>
                <input type="submit" value="Agregar">
        </form>
        </div>
    </body>
</div>
<div class="users-table">
    <br>
    <h2>Lista de Servicios</h2>
    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>COSTO</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <th><?= $row['id'] ?></th>
                    <th><?= $row['nombre'] ?></th>
                    <th><?= $row['costo'] ?></th>
                    <!-- al hacer click se envía al usuario al archivo update.php-->
                    <th><a href="update-service.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>      <!--Falta Hacer/Ya esta echo -->   
                    <!-- al hacer click se envía al usuario al archivo delete.php-->
                    <th><a href="delete-service.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></th>     <!--Falta Hacer/Ya esta echo -->  
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</html>