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
  include("header.php"); 
    ?>
</div>
<div>
    <body>
        
    <div class="users-form">
        <form action="register-clients.php" method="POST"> 
                <h1>Ingresar datos del Cliente</h1>
                <input type="text" name="dni" placeholder="Dni" required>
                <input type="text" name="name" placeholder="Nombre" required>
                <input type="text" name="phone_number" placeholder="Numero Telefonico" required>
                <input type="text" name="address" placeholder="Direccion" required>              
                <input type="text" name="email" placeholder="E-mail" required>           
                <input type="submit" onclick="add()" value="Agregar">
        </form>
    </div>
    <script>
        
        function del()
        {
            Swal.fire(
                'Eliminado',
                'Click para continuar',
                'success'
                )
        }
        function add()
        {
            Swal.fire(
                'Cliente Agregado',
                'Click para continuar',
                'success'
                )
        }
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                <th>E-MAIL</th>
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
                    <td><a onclick="del()" href="delete-clients.php?id=<?= $row['id'] ?>" class="users-table--delete">Eliminar</a></td> 
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <br>
</div>

</html>