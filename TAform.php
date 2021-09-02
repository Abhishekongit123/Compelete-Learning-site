<?php include 'All links.php'; ?>

<h3 class="text-center font-weight-bold ">Add New Record(For Teachers)</h3>
<div class="container-sm bg-light mt-3 rounded-sm py-2">
	<form class="p-2 font-weight-bold border border-dark rounded-sm" style="width: 500px; height: auto; margin-left: 27%;" action="addTdata.php" method="post" >
		<i class="fas fa-user-tie text-success" style="font-size: 130px; margin-left: 38%;"></i><br>
		<small style="margin-left: 40%;" class="text-danger font-weight-bold">Teacher's Profile</small>
		<div class="m-3 form-group">
		<label>Emp.No:</label>
		<input type="text" name="Emp_No" class="float-right text-uppercase form-control" style="width: 80%;">
	    </div>
	    <div class="m-3 form-group">
		<label>Name:</label>
		<input type="text" name="Name" class="float-right text-uppercase text-center form-control" style="width: 80%;">
	    </div>
	    <div class="m-3 form-group">
		<label>Phone Number:</label>
		<input type="text" name="Phone_No" class="float-right text-center form-control" style="width: 68%;">
	    </div>
	    <div class="m-3 form-group">
		<label>E-mail ID:</label>
		<input type="email" name="Email_id" class="float-right form-control" style="width: 80%;">
	    </div>
	    <div class="m-3">
	    <input type="submit" value="ADD RECORD" style="margin-left: 20%;" class="bg-primary px-4 py-2 font-weight-bold rounded">	
	    </div>
	</form>
</div>