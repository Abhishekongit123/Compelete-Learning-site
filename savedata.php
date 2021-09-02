<?php
    $stu_Name =$_POST['sname'];
    $stu_Rollno =$_POST['srollno'];
    $stu_Class =$_POST['class'];
    $stu_Phone =$_POST['sphone'];


   $conn = mysqli_connect("localhost","root","",learn_mysqli) or die("connection failed");
   $sql = "INSERT INTO students_data(Name,Rollno,Class,Phone) VALUES ('{$stu_Name}','{$stu_Rollno}','{$stu_Phone}','{$stu_Phone}')";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");

   mysqli_close($conn);

?>