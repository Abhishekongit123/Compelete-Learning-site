<?php
   $teach_id = $_POST['Emp_No'];
   $teach_Name =$_POST['Name'];
   $teach_Email =$_POST['Email_id'];
   $teach_Phone =$_POST['Phone_No'];
  

   $conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
   $sql = "UPDATE teachers_record SET Emp_No = '{$teach_id}',Name ='{$teach_Name}',Phone_No ='{$teach_Phone}',Email_id ='{$teach_Email}' WHERE Emp_No = {$teach_id}";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");

   header("Location: http://localhost/crud/Website-bootstrap4.php");
   mysqli_close($conn);
?>