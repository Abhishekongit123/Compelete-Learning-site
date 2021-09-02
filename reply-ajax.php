<?php
$from = $_POST['sender'];
$to = $_POST['reciver'];
$msj = $_POST['rep'];

$connections = mysqli_connect("localhost","root","","hp_comment_reply_box") or die("connection failed");
$query = "INSERT INTO reply_box (Massagefrom,Massageto,Reply) VALUES ('{$from}','{$to}','{$msj}')";
$resulttt = mysqli_query($connections , $query);

mysqli_close($connections);
?>