<?php 
include('connection.php');

$con = connection();

$id = $_POST['id'];
$name = $_POST['nombre'];
$year = $_POST['edad'];
$hability = $_POST['habilidades'];

$sql = "UPDATE users_table SET nombre=$name, edad=$year, habilidades=$hability WHERE id=$id";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}

?>