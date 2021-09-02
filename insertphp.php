<?php
$con = mysqli_connect('localhost','root','','ajax_with_php');

extract($_POST);
if (isset($_POST['submit'])) {
    
    $q = "INSERT INTO ajax (first_name,last_name) VALUES ('{$username}','{$password}')";

    $result = mysqli_query($con,$q);
    header('location:insertdataajax.php');
}
?>