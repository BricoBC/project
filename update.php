<?php 
include('connection.php');

$con = connection();

$id = $_GET['id'];
$sql = "SELECT * FROM user_table WHERE id = '$id' ";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class = "users-forms" >
        <form action="edit_user.php" method="post">
            <h2>Editar usuario</h2>
            <input type="hidden" name="id" placeholder="Ingresa el nombre" value="<?= $row['id'] ?>" >
            <input type="text" name="nombre" placeholder="Ingresa el nombre" value="<?= $row['nombre'] ?>" >
            <input type="text" name="edad" placeholder="Ingresa tu edad" value="<?= $row['edad'] ?>" >
            <input type="text" name="habilidades" placeholder="Ingresa tu habilidad" value="<?= $row['habilidades'] ?>" >
            
            <input type="submit" value="Guardar">
        </form>
    </div>

</body>
</html>