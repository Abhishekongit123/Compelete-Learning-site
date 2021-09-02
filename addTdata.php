<?php
   $teac_Empno = $_POST['Emp_No'];
   $teac_name = $_POST['Name'];
   $teac_email = $_POST['Email_id'];
   $teac_phone = $_POST['Phone_No'];


   $conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
   $sql = "INSERT INTO teachers_record(Emp_No,Name,Phone_No,Email_id) VALUES ('{$teac_Empno}','{$teac_name}','{$teac_phone}','{$teac_email}')";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");

   header("Location: http://localhost/CRUD/Website-bootstrap4.php");
   mysqli_close($conn);
?>