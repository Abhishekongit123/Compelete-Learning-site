<?php include 'All links.php'; ?>
<h3 class="text-center font-weight-bold m-3">Edit/Update Record(For Teacher's)</h3>
<div class="container-sm">
	<div class="row d-flex justify-content-center">
		<div class="col-sm-6 bg-light pt-3">
			<?php
			 $teach_id = $_GET['id'];


			$conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
            $sql = "SELECT * FROM teachers_record WHERE Emp_No ={$teach_id} ";
            $result = mysqli_query($conn, $sql) or die("query unsuccessful");


            if (mysqli_num_rows($result) > 0) {
            	while ($row =mysqli_fetch_assoc($result)) {
            		
			?>
			<form class="d-flex flex-column justify-content-center p-2 pb-4 border border-dark" method="post" action="Update-teach-data.php" style="margin-left: 10%;margin-right: 10%; border-radius: 20px;">
				<i class="fas fa-user-edit d-flex justify-content-center" style="font-size: 120px; color:#ffa502;"></i>
				<small class="d-flex justify-content-center font-weight-bold">Teacher's Profile Update</small>
				<div class="m-3">
					<label class="font-weight-bold">Emp.Number</label>
					<input type="Text" name="Emp_No" value="<?php echo $row['Emp_No']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Name :</label>
					<input type="Text" name="Name" value="<?php echo $row['Name']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Phone Number :</label>
					<input type="Text" name="Phone_No" value="<?php echo $row['Phone_No']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">E-mail ID</label>
					<input type="Text" name="Email_id" value="<?php echo $row['Email_id']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
			
				<input type="submit" value="Save Form " class="btn btn-success text-white font-weight-bold">
			</form>
		<?php }
	          }

	          mysqli_close($conn);
		?>
		</div>
	</div>
</div>

