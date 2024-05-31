<?php 
include('connection.php');

$con = connection();

$sql = "SELECT * FROM table_users";
$query = mysqli_query($con, $sql);

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
        <form action="insert_user.php" method="post">
            <h2>Datos</h2>
            <input type="text" name="nombre" placeholder="Ingresa el nombre">
            <input type="text" name="edad" placeholder="Ingresa tu edad">
            <input type="text" name="habilidades" placeholder="Ingresa tu habilidad">
            
            <input type="submit" value="Guardar">
        </form>
    </div>

    <div class = "users-table" >
        <table>
            <tr>
                <th>No. </th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Habilidades</th>
                <th>Opciones</th>
            </tr>
            <?php while($row = mysqli_fetch_array($query)): ?>
            <tr>
                <td> <?= $row['id'] ?> </td>
                <td> <?= $row['name'] ?> </td>
                <td> <?= $row['edades'] ?> </td>
                <td> <?= $row['habilidades'] ?> </td>
                <td><a class="users-table-edit" href="update.php?id=<?= $row['id'] ?>">Editar</a></td>
                <td><a class="users-table-delete" href="delete_user.php?id=<?= $row['id'] ?>"></a>Eliminar</td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>