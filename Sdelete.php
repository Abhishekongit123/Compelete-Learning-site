<?php
  $stu_id =$_GET['id'];

  $conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
  $sql = "DELETE  FROM students_record WHERE SNo = {$stu_id}";
  $result = mysqli_query($conn, $sql) or die("query unsuccessful");


  header("Location: http://localhost/crud/Website-bootstrap4.php");

  mysqli_close($conn);


?>