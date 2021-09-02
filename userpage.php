<?php include "All links.php"?>
<?php session_start(); ?>
<?php
    
    $email = $_SESSION['email'];

    $conn = mysqli_connect("localhost","root","","my_collage_project") or die("connection failed");
	$email_search = "select * from all_records where Email_ID ='$email'";
	$sql = mysqli_query($conn , $email_search);
	$row_data= mysqli_fetch_assoc($sql);
    $photo = $row_data['Photo'];

    $_SESSION['img'] = "$photo";
?>
<div class="container-sm justify-content-center">
	<div class="row justify-content-center">
		<div class="col-sm-4 bg-white shadow-lg mt-3 justify-content-center">
			<img src="<?php echo "$photo";?>" class="img-fluid mx-auto d-block mt-3" style=" clip-path: circle(50%);width: 110px; height: 110px;">
			<form>
				<p class="text-center font-weight-bold" style="font-size: 20px;"><u>PROFILE DETAILES</u></p>
				<div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="color: #f0932b;"><i class="fas fa-user-tie"></i></span>
                        </div>
                        <p class="form-control font-weight-bold text-uppercase"><?php echo $_SESSION['name']; ?></p>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"style="color: #4834d4;"><i class="fas fa-venus-mars" ></i></span>
                        </div>
                        <p class="form-control font-weight-bold text-uppercase"><?php echo $_SESSION['gen']; ?></p>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="color: #e74c3c;"><i class="fas fa-envelope-open-text"></i></span>
                        </div>
                        <p class="form-control font-weight-bold"><?php echo $_SESSION['email']; ?></p>
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" style="color: #f39c12;"><i class="fas fa-key"></i></span>
                        </div>
                        <p class="form-control" style="overflow: hidden;"><?php echo $_SESSION['password']; ?></p>
                        </div>
                        <a href="Website-bootstrap4.php" class="btn btn-info btn-block btn-sm font-weight-bold text-dark">Back To Home Page<i class="fas fa-house-user ml-2" style="color: #ffeaa7;"></i></a>
                        <a href="Admin Panal.php" class="btn btn-block btn-sm font-weight-bold text-dark" style="background-color: #c56cf0;">Admin Panal<i class="fas fa-users-cog ml-2" style="color:#182C61;"></i></a>
                        <p class="font-weight-bold p-2 mt-2 rounded-sm text-danger text-center" style="background-color: #fad390;"><label class="text-dark mr-2">NOTE:-</label>Please do not change the above records.you only upload profile picture.</p>
			</form>
		</div>
	</div>
</div>