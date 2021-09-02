<?php include "All links.php"?>
<?php 
 session_start();
?>
<?php 
if (isset(($_POST['Submit']))) {
	$to_email = $_POST['email'];
    $subject = "Varification of email ID";
    $body = "Hi,User verify your ID and click on below link to create new password 
    Link : http://localhost/CRUD/Update-Password.php";
    $headers = "From: mp1445747@gmail.com";
    if (mail($to_email, $subject,$body,$headers)) {
    	$_SESSION['love'] = "$to_email";
    	echo "We successfully send gmail on your given ID.check your gmail .";
    }else{
    	echo '<script>alert("Please enter valid gmail ID.try again")</script>';
    }
}
?>
<style>
	#in:focus{
		box-shadow: none;
		border: transparent;
	}
</style>
<link href="https://fonts.googleapis.com/css2?family=Fondamento:ital@1&family=Pacifico&display=swap" rel="stylesheet">
<div class="container-sm bg-danger font-weight-bold text-center"></div>
<div class="container-sm">
	<div class="row justify-content-center mt-5">
		<div class="col-sm-4 mt-3 mb-3 border rounded-sm shadow" style="background: #dfe6e9;">
			<div class="card bg-transparent" style="border:none;">
				<img src="images/clipboard.svg" class="img-fluid d-block mx-auto w-50 h-50 mt-3">
				<h5 class="text-center font-weight-bold mt-3"style="font-size: 30px;font-family: 'Fondamento', cursive;">Varification Of E-mail</h5>
				<h2 class="text-center font-weight-bold mt-2"style="font-size: 16px;font-family: 'Pacifico', cursive;">Fill correct ID to get email</h2>
				<div class="card-body">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-envelope-open-text" style="color: #1e3799;"></i></span>
							</div>
							<input type="email" name="email" class="form-control font-weight-bold text-dark font-italic" id="in" placeholder="Enter username">
						</div>
						<p class="text-left text-danger font-italic" id="note">*Enter valid gmail ID.</p>
						<input type="submit" name="Submit" value="Send email" class="form-control btn-primary font-weight-bold " >
					</form>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#in').keyup(function() {
				$('#note').hide();
			});
		});
	</script>
</div>