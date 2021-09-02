<?php 
 
 $name = "";

 $connection = mysqli_connect("localhost","root","","comment_box") or die("connection failed");
 $query = "SELECT * FROM massages";
 $resul = mysqli_query($connection , $query);

 $row = mysqli_num_rows($resul);

 



 if ($row) {
 	echo "true";
    $db_likes = $row['Likes'];
    echo $db_likes;

 }else{
 	echo "failed";
 }

?>