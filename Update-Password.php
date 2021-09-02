<?php 
session_start(); 
?>
<?php include "All links.php"?>
<link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Pacifico&display=swap" rel="stylesheet">
<div class="container-sm bg-danger font-weight-bold text-center"></div>
<div class="container-sm">
	<div class="row justify-content-center mt-5 bg-light rounded">
		<div class="col-sm-4 mt-3 mb-3 border shadow rounded-sm bg-white">
			<div class="card  bg-transparent" style="border:none;">
				<h5 class="text-center font-weight-bold mt-3"style="font-size: 30px;font-family: 'Fondamento', cursive;">Create New Password</h5>
				<h2 class="text-center font-weight-bold mt-2"style="font-size: 16px;font-family: 'Pacifico', cursive;">Update Password</h2>
				<div class="card-body">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="color: #1289A7;"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="name" class="form-control" placeholder="enter your name">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="color: #1289A7;"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" class="form-control" placeholder="New password">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="color: #44bd32;"><i class="fas fa-lock"></i></span>
							</div>
							<input type="password" name="cpass" class="form-control" placeholder="Confirm password">
						</div>
						<input type="submit" name="Submit" value="Update Password" class="form-control btn-primary font-weight-bold " >
					</form>
				</div>
			</div>
		</div>
	</div>
</div>