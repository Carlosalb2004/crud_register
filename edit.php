<?php
    include("session.php");
    include("config.php");
    $id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <a href="home.php">Inicio</a>
        <a href="users.php">Usuarios</a>
        <a href="registration.php">Registro de Usuarios</a>
        <a href="logout.php">Cerrar Sesion</a>
        <h2>ACTUALIZAR</h2>

        <form action="update.php" method="POST">
            <?php
            $result=mysqli_query($mysqli, "SELECT * FROM users WHERE username='$id'");
            while($row=mysqli_fetch_array($result))
            {
                echo "<input type='hidden' name='id' value='{$row['username']}' required>";
                echo "<input type='text' name='firstname' value='{$row['firstname']}' required>";
                echo "<input type='text' name='middlename' value='{$row['middlename']}' required>";
                echo "<input type='text' name='lastname' value='{$row['last_name']}' required>";
                echo "<label>Fecha de Cumpleaños</label>";
                echo "<input type='date' name='birthdate' value='{$row['birthday']}' required>";
                echo "<input type='hidden' name='username' value='{$row['username']}' required>";
                echo "<input type='password' name='password' value='{$row['password']}' required>";
                echo "<button type='submit'>Actualizar</button>";
            }
            ?>
        </form>     
    </body>
</html>