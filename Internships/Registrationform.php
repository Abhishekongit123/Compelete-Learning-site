<?php session_start(); ?>
<?php include "cdn links.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<title>internship form</title>
	</head>
	<body class="bg-light">
		<div class="container my-2 p-2 ">
			<div class="row d-flex justify-content-center">
				<div class="col-sm-8">
					<h1 class="form-control text-center mb-1 font-weight-bold" style="border-radius: 12px;font-size: 24px;background-color: #ccae62;">INTERNSHIP REGISTRATION FORM</h1>
					<?php
					if (isset($_POST['btns'])) {
						$name = $_SESSION['myname'] = $_POST['n'];
						$email = $_POST['e'];
						$phone= $_POST['p'];
						$gender = $_POST['g'];
						$cast = $_POST['sb'];
						$course_code = $_POST['mb'];
						$dbconnection = mysqli_connect("localhost","root","","internship_reg") or die("connection failed");
					$replyquery = "INSERT INTO data(Name,E_mail,Phonen,Gender,Cast,CourseC) VALUES ('{$name}','{$email}','{$phone}','{$gender}','{$cast}','{$course_code}')";
					$replyresult = mysqli_query($dbconnection , $replyquery);
					if ($replyresult) {
					?>
					<script>
					location.replace("http://localhost/CRUD/Internships/html-internship.php");
					</script>
					<?php
					function password_generate($chars)
					{
					$data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
					return substr(str_shuffle($data), 0, $chars);
					}
					$_SESSION['form_number'] = password_generate(7)."\n";
					}
					}
					?>
					<form class="my-2 p-2 shadow-lg border font-weight-bold " style="border-radius: 12px;background-color:#f1f2f6;" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
						<div class="input-group">
							<label class="mt-1">Candiate Name:</label>
							<input type="text" name="n" class="form-control ml-2 rounded text-uppercase" placeholder="Name must be in uppercase">
						</div>
						<div class="input-group my-2">
							<label class="mt-1">Email Address:</label>
							<input type="email" name="e" class="form-control ml-2 rounded" placeholder="Valid email address">
						</div>
						<div class="input-group my-2">
							<label class="mt-1">Phone NO.:</label>
							<input type="text" name="p" class="form-control ml-2 rounded" placeholder="Phone number without country code">
						</div>
						<div class="input-group my-2">
							<label class="mt-1">Gender:</label>
							<div class="form-check ml-2">
								<select name="g" class="form-control ml-2 rounded">
									<option>...select opt...</option>
									<option>MALE</option>
									<option>FEMALE</option>
								</select>
							</div>
						</div>
						<div class="input-group my-2">
							<label class="mt-1">Cast:</label>
							<select name="sb" class="form-control ml-2 rounded">
								<option>...select opt...</option>
								<option>GEN</option>
								<option>ST/SC</option>
								<option>OBC</option>
								<option>OTH</option>
							</select>
						</div>
						<div class="input-group my-2">
							<label class="mt-1">Course Code:</label>
							<select name="mb" class="form-control ml-2 rounded">
								<option>...select opt...</option>
								<option>HTML09AE</option>
								<option>CSSS04CC</option>
								<option>BOST00AA</option>
								<option>JSSS06JE</option>
							</select>
						</div>
						<input type="Submit" name="btns" class="btn btn-sm btn-block btn-info text-dark font-weight-bold" value="Save information">
					</form>
					<div class="text-left bg-white border rounded-sm" style="width: 100%;height: auto;">
						<li style="list-style: none;" class="ml-2 font-weight-bold ">Important point to be remember before filling this form:</li>
						<ul>
							<li style="list-style: square;"class="text-warning">“Candiate Name” & “Email Address” must be similear to your website login name.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>