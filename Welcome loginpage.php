<?php include "All links.php"?>
<?php
session_start();
?>
<?php
if (isset($_POST['Submitee'])) {
	$email = $_POST['email'];
	$password = $_POST['pass'];
    $conn = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
	$email_search = "select * from all_records where Email_ID ='$email'";
	$sql = mysqli_query($conn , $email_search);
	$email_count = mysqli_num_rows($sql);
	if ($email_count) {
		$email_pass = mysqli_fetch_assoc($sql);
		$db_pass = $email_pass['Password'];
		$db_name = $email_pass['Name'];
		$db_email = $email_pass['Email_ID'];
		$db_gender = $email_pass['Gender'];
		$password_decode = password_verify($password, $db_pass);
		if ($password_decode) {
			echo "login completed";
			$_SESSION['name'] = "$db_name";
			$_SESSION['phone'] = "$db_phone";
			$_SESSION['email'] = "$db_email";
			$_SESSION['password'] = "$db_pass";
			$_SESSION['gen'] = "$db_gender";
			header("Location: http://localhost/crud/Website-bootstrap4.php");
		}else{
			echo '<script>alert("FAILED,Please check your PASSWORD and retry.")</script>'; 
		}
	}else{
		echo '<script>alert("Email not found")</script>'; 
	}
	mysqli_close($conn);
}
?>
<style>
	#no{
		background:#F8EFBA;
		font-weight: bold; 
	}
	#no:focus{
		box-shadow: none;
		border: transparent;
		font-weight: bold;
		font-style: italic;
	}
</style>
<div class="container-sm">
	<div class="row justify-content-center mt-5" style="background-image: url('images/meeting.jpg');background-repeat: no-repeat; background-size: 100% 100%;border-radius: 10px;">
		<div class="col-sm-4 mt-3 mb-3 border border-white rounded-sm">
			<div class="card  bg-transparent" style="border:none;">
				<h5 class="text-center font-weight-bold"style="font-size: 30px; letter-spacing: 5px;text-shadow: 4px 0px 4px white;">Welcome</h5>
				<h4 class="text-center font-weight-bold"style="font-size: 20px;"><i>Login User</i></h4>
				<div class="card-header bg-transparent" style="border:none;">
					<a href="" class="btn btn-block btn-danger font-weight-bold"><i class="fab fa-google mr-2"></i>Login via Google</a>
					<a href="" class="btn btn-block text-white font-weight-bold" style="background-color: #3c6382;"><i class="fab fa-facebook-f mr-2"></i>Login via Facebook</a>
				</div>
				<p class="text-center font-weight-bold mt-4">OR</p>
				<div class="card-body">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="color: #B53471;"><i class="fas fa-envelope-open-text"></i></span>
							</div>
							<input type="email" name="email" class="form-control" placeholder="Enter username" id="no">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" style="color: #f39c12;"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="pass" class="form-control" placeholder="Password" id="no">
						</div>
						<input type="submit" name="Submitee" value="Login Now" class="form-control btn-primary font-weight-bold " >
						<p class="text-center font-weight-bold">Not have an account? <a href="Welcome page.php" class="text-decoration-none font-weight-bold"> Signup Here</a></p>
						<p class="text-center font-weight-bold">Forgot password No worry ?<a href="Activate-email.php" class="text-decoration-none" id="fg"> Click Here</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#fg').mouseenter(function(){
				$('#fg').css('color','white');
			});
			$('#fg').mouseleave(function(){
				$('#fg').css('color','');
			});
		});
	</script>
</div>
<!-- &nbsp code for making gap between text -->