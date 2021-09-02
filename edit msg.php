<?php include "All links.php" ?>
<link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch&family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fondamento&display=swap" rel="stylesheet">       
<?php session_start(); ?>
<?php 
 if (isset($_POST['Submit'])) {

 	$new_msg = $_POST['edit'];
 	$name = $_SESSION['name'];
 	
 	$conn = mysqli_connect("localhost","root","","comment_box") or die("connection failed");
	$msg = "UPDATE massages SET comments = '$new_msg' WHERE Name = '$name' ";
	$result = mysqli_query($conn , $msg);

	if ($result) {
		$c = "Successfully Update.";
		header("Location: http://localhost/crud/PDF-download.php");
	}else{
		$f = "failed";
	}


	mysqli_close($conn);
 	
 }
?>
<div class="container-fluid d-flex justify-content-center mt-5">
	<form class="col-sm-5 border p-3" style="border-radius: 10px;background-color: #ecf0f1;" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
		<h2 class="text-center" style="font-family: 'Grenze Gotisch', cursive;">Update/Edit Your Comments</h2>
		<label class="font-weight-bold">Name :</label>
		<span style="font-family: 'Kaushan Script', cursive; font-size: 20px;"><?php echo $_SESSION['name']; ?></span><br>
		<label class="font-weight-bold font-italic text-info">Edit your massages</label><span class="ml-2 text-success font-italic"><?php echo $c; ?></span>
		<input type="text" name="edit" class="form-control" placeholder="Enter your massage here" style="font-family: 'Fondamento', cursive;background-color:#f5f6fa;">
		<input type="submit" name="Submit" value="Update" class="btn btn-success btn-block btn-sm font-weight-bold text-dark my-2">
		<a href="PDF-download.php" class="btn btn-info btn-block btn-sm font-weight-bold text-dark">Back To Home Page<i class="fas fa-house-user ml-2" style="color: #ffeaa7;"></i></a>
	</form>
</div>







