<?php include 'all links.php'; ?>
<div class="container-sm bg-light" style="margin-top: 5%;" id="hide">
	<h4 class="mt-1 text-center" style="text-shadow: 0px 0px 5px blue;">LOGIN WORKFRAME</h4>
	<div class="row d-flex justify-content-center">
		<div class="col-sm-5 d-flex justify-content-center">
			<form action="WF login.php" method="post" class="m-3 font-weight-bold p-2 border border-dark bg-light" style="border-radius: 20px;">
				<img src="images/login logo.png" class="img-fluid mx-auto d-block" alt="Responsive image">
				<small class="d-flex justify-content-center font-weight-bold">LOGIN USER</small>
		<div class="m-2">
			<label>Name :</label><br>
			<input type="text" name="Name">
		</div class="m-2">
		<div>
			<label class="ml-2">E-mail ID :</label><br>
			<input type="email" name="Email_id" class="ml-2">
		</div>
		<div class="m-2">
			<label>Password :</label><br>
			<input type="password" name="Password">
		</div>
		<input type="checkbox" class="ml-2" id="tick"><small class="text-muted text-danger ml-1 " style="font-size: 13px;">Make checked to submit. </small>
		<div class="m-2 d-flex justify-content-center">
			<input type="submit" value="LOGIN" class="btn btn-success font-weight-bold px-5" id="load" style="display: none;">
		</div>
	        </form>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#tick').click(function() {
				$('#load').slideDown(500);
			});
			$('#hide').dblclick(function() {
				$('#load').hide("fast");
			});
		});
	</script>
</div>
