<?php
$fn = $_POST['first_name'];
$ln = $_POST['last_name'];

$connections = mysqli_connect("localhost","root","","ajax_with_php") or die("connection failed");
$query = "INSERT INTO ajax(first_name,last_name) VALUES ('{$fn}','{$ln}')";
$resulttt = mysqli_query($connections , $query);

mysqli_close($connections);
?>