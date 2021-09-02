<?php include 'All links.php'; 
if (isset($_POST['deletebtn'])){

	$teac_id = $_POST['Emp_No'];

   $conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
   $sql = "DELETE  FROM teachers_record WHERE Emp_No ={$teac_id}";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");


   header("Location: http//localhost/crud/Website-bootstrap4.php");

   mysqli_close($conn);
}
?>

<h3 class="text-center font-weight-bold ">Delete Record(For Teacher's)</h3>
<div class="container-sm bg-light mt-3 rounded-sm py-2">
	
	<form class="p-2 pl-4 font-weight-bold border border-dark rounded-sm post-form" style="width: 500px; height: auto; margin-left: 27%;" action="<?php echo$_SERVER['PHP_SELF']; ?>" method="post" >
		<i class="fas fa-user-slash text-danger" style="font-size: 130px; margin-left: 33%;"></i><br>
		<small style="margin-left: 40%;" class="text-dark font-weight-bold">Teacher's Profile</small>
		<div class="m-3 form-group">
		<label class="font-weight-bold">Emp.No :</label>	
	    <input type="text" name="Emp_No" style="margin-left: 10%; width: 50%; margin-left: 12%;">
	    </div>
	    <div class="m-3">
	    <input type="submit" value="Delete" name="deletebtn" style="margin-left: 34%;" class="bg-danger px-4 py-2 font-weight-bold rounded text-white submit">	
	    </div>
	</form>
</div>