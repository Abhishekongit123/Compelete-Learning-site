<?php
   $teach_id =$_GET['id'];


   $connt = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
   $sqlt = "DELETE  FROM teachers_record WHERE Emp_No = {$teach_id}";
   $resultt = mysqli_query($connt, $sqlt) or die("query unsuccessful");


   header("Location: http://localhost/crud/Website-bootstrap4.php");

   mysqli_close($connt);
?>