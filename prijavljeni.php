<?php
include_once 'dbkonekcija.php';

$ime= $_POST['uname'];
$pwd= $_POST['password'];


$sql= "INSERT INTO prijava (username,password) VALUES ('$ime','$pwd');";
mysqli_query($conn, $sql);

header("location: ../index.php?signup=success");
