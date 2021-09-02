<?php include 'All links.php'; ?>
<h3 class="text-center font-weight-bold m-3">Add New Record(For Students's)</h3>
<div class="container-sm">
	<div class="row d-flex justify-content-center">
		<div class="col-sm-6 bg-light pt-3">
			<form class="d-flex flex-column justify-content-center p-2 rounded-sm" method="post" action="addSdata.php" style="margin-left: 10%;margin-right: 10%;">
				<i class="fas fa-user-graduate d-flex justify-content-center" style="font-size: 120px; color: #1B1464;"></i>
				<small class="d-flex justify-content-center font-weight-bold">Student's Profile</small>
				<div class="m-3">
					<label class="font-weight-bold">S.No</label>
					<input type="Text" name="SNo" class="ml-4 p-1 text-center font-weight-bold"style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Name :</label>
					<input type="Text" name="Name" class="ml-4 text-center font-weight-bold text-uppercase" style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Phone No.:</label>
					<input type="Text" name="Phone_No" class="ml-4 p-1 text-center font-weight-bold" style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">Class :</label>
					<input type="Text" name="Class" class="ml-4 p-1 text-center font-weight-bold text-uppercase" style="background-color:#d1ccc0;">
				</div>
				<div class="m-3">
					<label class="font-weight-bold">E-mail ID :</label>
					<input type="email" name="Email" class="ml-4 p-1 text-center font-weight-bold text-uppercase" style="background-color:#d1ccc0;">
				</div>
				<input type="submit" value="Save Form " class="btn btn-success text-white font-weight-bold">
			</form>
		</div>
	</div>
</div>
