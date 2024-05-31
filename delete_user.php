<?php 
include('connection.php');

$con = connection();

$id = $_GET['id'];
$sql = "DELETE FROM user_table WHERE id='$id' ";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: index.php");
}

?>