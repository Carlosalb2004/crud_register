<?php
    //Registration-Servicios Clientes
    include("config.php");
    include("session.php");

?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registro de Servicio Cliente</title>
        <link rel="stylesheet" type="text/css" href="style-users.css?ts=<?=time()?>" />
        <meta name=""viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
        
    </head>
    
    <div>
    <?php
include("header.php"); 
    ?>
</div>
<div>
    <body>
    <script>
        function add()
        {
            Swal.fire(
                'Servicio Agregado',
                'Click para continuar',
                'success'
                )
        }
    </script>
    <div class="users-form">
        <form action="register-serviceClients.php" method="POST">
            <h1>Ingresar datos de Servicio Cliente</h1>
            <input type="text" name="id_users" placeholder="Id Usuario" list="busqueda_u">
            <datalist id="busqueda_u">
                <option>
                <?php 
                    $sql = "SELECT * FROM users"; 
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['id'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            <input type="text" name="id_clients" placeholder="Id Clients" list="busqueda_c">
            <datalist id="busqueda_c">
                <option>
                <?php 
                    $sql = "SELECT * FROM clients"; 
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['id'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            <input type="text" name="id_service" placeholder="Id Service" list="busqueda_s">
            <datalist id="busqueda_s">
                <option>
                <?php 
                    $sql = "SELECT * FROM services"; 
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['id'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            
            <input type="text" placeholder="Monto" name="monto">
            <input type="text" name="realizado" placeholder="Realizado" list="respuesta">
            <datalist id="respuesta">
                <option>SI</option>
                <option>NO</option>
            </datalist>
            <input type="text" name="name_user" placeholder="Username quien registro" list="name_user">
            <datalist id="name_user">
                <option>
                <?php 
                    $sql="SELECT * FROM users";
                    $query = mysqli_query($mysqli, $sql);

                while ($row = mysqli_fetch_array($query)): ?>
                        <option><?= $row['username'] ?></option>
                <?php endwhile; ?>
                </option>
            </datalist>
            <input type="submit" onclick="add()" value="Agregar">
        </form> 
    </div>  
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</div>
<div class="users-table">
    <br>
    <h2>Servicios Clientes Registrados</h2>
    <br>
    <table>                     <!--creamos la tabla para mostrar los clientes creados-->
        <thead>
            <tr>
                <th>ID</th>
                <th>ID_USUARIOS</th>
                <th>ID_CLIENTES</th>
                <th>ID_SERVICIOS</th>
                <th>MONTO</th>
                <th>REALIZADO</th>
                <th>USERNAME</th>
                <th>FECHA/HORA</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            $sql = "SELECT * FROM serviceclients"; 
            $query = mysqli_query($mysqli, $sql);
            while ($row = mysqli_fetch_array($query)): ?>
                <tr>
                    <td><?= $row['id_sc'] ?></td>
                    <td><?= $row['id_u'] ?></td>
                    <td><?= $row['id_c'] ?></td>
                    <td><?= $row['id_s'] ?></td>
                    <td><?= $row['monto'] ?></td>
                    <td><?= $row['realizado'] ?></td>
                    <td><?= $row['name_user'] ?></td>
                    <td><?= $row['fecha'] ?></td>
                    
                </tr>             
            <?php endwhile; ?>
        </tbody>
    </table>
    <br>
    <br>
</div>

</html>  
