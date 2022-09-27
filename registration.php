<?php
    //Registration-Users
    include("session.php"); 
    include("config.php");
    $query="SELECT * FROM users";
    $result=filterRecords($query);

    function filterRecords($query){
        include("config.php");
        $filter_result=mysqli_query($mysqli, $query);
        return $filter_result;
    }
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <a href="home.php">Inicio</a>
        <a href="registration.php">Registro de Usuarios</a>
        <a href="registration-clients.php">Registro de Clientes</a> <!-- Falta hacer/ Ya esta echo-->
        <a href="registration-service.php">Registro de Servicios</a>  <!-- Falta hacer-->
        <a href="logout.php">Cerrar Sesion</a>
        <h2>REGISTRARSE</h2>
        <form action="register.php" method="POST">
            <input type="text" placeholder="Nombre" name="firstname" required>
            <input type="text" placeholder="Segundo Nombre" name="middlename" required>
            <input type="text" placeholder="Apellido" name="lastname" required>
            <input type="date" name="birthdate" required>
            <input type="text" placeholder="Usuario" name="username" required>
            <input type="password" placeholder="Contraseña" name="password" required>
            <button type="subtmit">Registrarse</button>
            <br>
            <br>
        </form>     
        <?php
            echo "<table border='1'>
            <tr>
                <th>Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido</th>
                <th>Fecha de Nacimiento</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['firstname']."</td>";
                echo "<td>".$row['middlename']."</td>";
                echo "<td>".$row['last_name']."</td>";
                echo "<td>".$row['birthday']."</td>";
                echo "<td><a href='edit.php?id=".$row['username']."'>Editar</a></td>";
                echo "<td><a href='delete.php?id=".$row['username']."'>Eliminar</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>