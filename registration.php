<?php
    //Registration-Users
    include("config.php");
    include("session.php");
    $query="SELECT * FROM users";
    $result=filterRecords($query);

    function filterRecords($query){
        include("config.php");
        $filter_result=mysqli_query($mysqli, $query);
        return $filter_result;
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Usuarios</title>
        <link rel="stylesheet" type="text/css" href="style-users.css?ts=<?=time()?>" />
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
        <form action="register.php" method="POST">
            <br>
            <h1>Ingresar datos del Usuario</h1>
            <input type="text" placeholder="Nombre" name="firstname" required>
            <input type="text" placeholder="Segundo Nombre" name="middlename" required>
            <input type="text" placeholder="Apellido" name="lastname" required>
            <input type="date" name="birthdate" required>
            <input type="text" placeholder="Usuario" name="username" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <input type="submit" value="Registrar">
        </form> 
    </div> 
    </body>
</div>
<div class="users-table">
    <br>
    <h2>Usuarios registrados</h2>
    <br>
    <table>                     <!--creamos la tabla para mostrar los clientes creados-->
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>SEGUNDO NOMBRE</th>
                <th>APELLIDO</th>
                <th>CUMPLEAÑOS</th>
                <th>USUARIO</th>
                <th>CONTRASEÑA</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <th><?= $row['firstname'] ?></th>
                    <th><?= $row['middlename'] ?></th>
                    <th><?= $row['last_name'] ?></th>
                    <th><?= $row['birthday'] ?></th>
                    <th><?= $row['username'] ?></th>
                    <th><?= $row['password'] ?></th>
                    <th><a href="update.php?id=<?= $row['username'] ?>" class="users-table--edit">Editar</a></th>     
                    <th><a href="delete.php?id=<?= $row['username'] ?>" class="users-table--delete">Eliminar</a></th> 
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <br>
</div>

</html>  

