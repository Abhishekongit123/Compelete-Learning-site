<?php
   $s_SNo = $_POST['SNo'];
   $stu_Name =$_POST['Name'];
   $stu_Email =$_POST['Email'];
   $stu_Phone =$_POST['Phone_No'];
   $stu_Class =$_POST['Class'];


   $conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
   $sql = "UPDATE students_record SET Name ='{$stu_Name}',Phone_No ='{$stu_Phone}',Class ='{$stu_Class}',Email ='{$stu_Email}' WHERE SNo = {$s_SNo}";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");

   header("Location: http://localhost/crud/Website-bootstrap4.php");
   mysqli_close($conn);
?>