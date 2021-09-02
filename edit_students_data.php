<?php include 'All links.php'; ?>
<h3 class="text-center font-weight-bold m-3">Edit/Update Record(For Students's)</h3>
<div class="container-sm">
	<div class="row d-flex justify-content-center">
		<div class="col-sm-6 bg-light pt-3">
			<?php
			 $stu_id = $_GET['id'];


			$conn = mysqli_connect("localhost","root","","website_bootstrap_record") or die("connection failed");
            $sql = "SELECT * FROM students_record WHERE SNo ={$stu_id} ";
            $result = mysqli_query($conn, $sql) or die("query unsuccessful");


            if (mysqli_num_rows($result) > 0) {
            	while ($row =mysqli_fetch_assoc($result)) {
            		
			?>
			<form class="d-flex flex-column justify-content-center p-2 pb-4 border border-dark" method="post" action="Update-stu-data.php" style="margin-left: 10%;margin-right: 10%;border-radius: 20px;">
				<i class="fas fa-user-edit d-flex justify-content-center" style="font-size: 120px; color:#ffa502;"></i>
				<small class="d-flex justify-content-center font-weight-bold">Student's Profile Update</small>
				<div class="m-3">
					<label class="font-weight-bold">S.No</label>
					<input type="Text" name="SNo" value="<?php echo $row['SNo']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Name :</label>
					<input type="Text" name="Name" value="<?php echo $row['Name']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Phone No.:</label>
					<input type="Text" name="Phone_No" value="<?php echo $row['Phone_No']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Class:</label>
					<input type="Text" name="Class" value="<?php echo $row['Class']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">E-mail ID</label>
					<input type="Text" name="Email" value="<?php echo $row['Email']; ?>" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
			
				<input type="submit" value="Update Form" class="btn btn-success text-white font-weight-bold">
			</form>
		<?php }
	          }

	          mysqli_close($conn);
		?>
		</div>
	</div>
</div>
