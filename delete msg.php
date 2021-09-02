<?php session_start(); ?>
<?php 
 $name = $_SESSION['name'];
 
 $conn = mysqli_connect("localhost","root","","comment_box") or die("connection failed");
 $search_name = "DELETE FROM massages WHERE Name = '$name'";
 $sql = mysqli_query($conn , $search_name);

 
 header("Location: http://localhost/crud/PDF-download.php");

 mysqli_close($conn);

?>