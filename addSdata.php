<?php
   $stu_sno = $_POST['SNo'];
   $stu_name = $_POST['Name'];
   $stu_email = $_POST['Email'];
   $stu_phone = $_POST['Phone_No'];
   $stu_class = $_POST['Class'];


   $conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
   $sql = "INSERT INTO students_record(SNo,Name,Phone_No,Class,Email) VALUES ('{$stu_sno}','{$stu_name}','{$stu_phone}','{$stu_class}','{$stu_email}')";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");

   header("Location: http://localhost/CRUD/Website-bootstrap4.php");
   mysqli_close($conn);
?>