<?php session_start(); ?>
<?php include "cdn links.php" ?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@1,700&family=Libre+Caslon+Display&display=swap" rel="stylesheet">
	</head>
	<body class="bg-light">
		<div class="container-fluid">
			<h2 class="text-center my-2 font-italic" style="font-family: 'Crimson Text', serif;">INTERNSHIP PROGRAM 2020 IN VARANASI,UP</h2>
			<p class="text-center font-weight-bold" style="font-size: 13px;font-family: 'Libre Caslon Display', serif">We are going to organize internship program online to all of our registered studentes . 23<sup>rd</sup> of next mounth 2020.for proper registration follow bellow steps carefully.after completion you may proceed and start accordind to given instruction.<br>After completion of this internship you will be provided a certificate according to your project and task performance,all instruction are given bellow please check it and read carefully.</p><br>
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-sm-4">
						<div class="p-3 border bg-white" style="border-radius: 9px;">
							<img src="images/reg.form.svg" class="img-fluid mx-auto d-block w-25">
							<h5 class="text-center mt-2">START REGISTRATION</h5>
							<p class="text-center font-weight-bold"style="font-size: 14px;">Go for registration by click on bellow button.Make sure all information are correct.</p>
							<a href="Registrationform.php" class="btn btn-sm btn-primary font-weight-bold text-dark btn-block">Register Now</a>
						</div>
					</div>
					<div class="col-sm-4 my-2 my-lg-0">
						<div class="p-3 border bg-white" style="border-radius: 9px;">
							<img src="images/table.svg" class="img-fluid mx-auto d-block w-25">
							<h5 class="text-center mt-2">TABLE</h5>
							<p class="text-center font-weight-bold"style="font-size: 14px;">For review the complete record in table form.please hit on the given button bellow.</p>
							<button class="btn btn-sm btn-primary font-weight-bold text-dark btn-block" id="btnt">Load Table</button>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="p-3 border bg-white" style="border-radius: 9px;">
							<img src="images/startup.svg" class="img-fluid mx-auto d-block w-25">
							<h5 class="text-center mt-2">GET STARTED</h5>
							<p class="text-center font-weight-bold"style="font-size: 14px;">After doing all previous steps.lets go for learning phase by hitting on bellow .</p>
							<button class="btn btn-sm btn-primary font-weight-bold text-dark btn-block" id="btns">Start Learning</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container-sm my-2 rounded border" style="background:#6c5ce7;">
				<h3 class="font-weight-bold font-italic">INFORMATION BROCHURE</h3>
				
			</div>
			<div class="container-sm bg-white border my-2" style="border-radius: 9px;display: none;" id="contentbox">
				<h4 class="text-center mt-2">Record <strong class="text-uppercase font-weight-bold"><?php echo $_SESSION['myname']; ?></strong> </h4>
				<?php
				$input = $_SESSION['myname'];
				$connection = mysqli_connect("localhost","root","","internship_reg") or die("connection failed");
				$query = "SELECT * FROM data WHERE Name = '$input'";
				$result = mysqli_query($connection , $query);
				while ($dd = mysqli_fetch_assoc($result)) {
				?>
				<table class="table border bg-light">
					<label class="float-right">Login ID -<span class="font-weight-bold">same as "Form NO."</span></label>
					<label class="float-left">Form NO. -<span class="font-weight-bold"><?php echo $_SESSION['form_number']; ?></span></label>
					<thead class="text-center">
						<tr>
							<th scope="col">Name</th>
							<th scope="col">E-mail</th>
							<th scope="col">Contact No.</th>
							<th scope="col">Gender</th>
							<th scope="col">Cast</th>
							<th scope="col">Course code</th>
							<th scope="col">Photo</th>
						</tr>
					</thead>
					<tbody class="text-center">
						<tr>
							<th class="text-uppercase"><?php echo $dd['Name'];?></th>
							<td><?php echo $dd['E_mail'];?></td>
							<td><?php echo $dd['Phonen'];?></td>
							<td><?php echo $dd['Gender'];?></td>
							<td><?php echo $dd['Cast'];?></td>
							<td><?php echo $dd['CourseC'];?></td>
							<td><?php echo $dd['Name'];?></td>
						</tr>
					</tbody>
				</table>
				<?php
				}
				mysqli_close($connection);
				?>
			</div>
			<div class="container-sm bg-white border my-2 p-2" style="width:100%;height:auto;display: none;border-radius: 10px;" id="startbox">
				<h3 class="text-center mb-2 font-weight-bold">Get Started</h3>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-sm-4 text-center">
							<div class="p-2 border"style="background: #ffeaa7;">
								<label class="text-uppercase font-weight-bold form-control text-center bg-transparent border-0"><i class="fas fa-calendar-alt mr-1"></i>Timing & Data</label>
								<li>Timing:<strong>NOT required</strong></li>
								<li>Starting Date:<strong>...........</strong></li>
								<p>Time is not required because this internship is <strong>online type and free of cost</strong>,Date of selected course must be predefined.</p>
							</div>
						</div>
						<div class="col-sm-4 my-2 my-lg-0">
							<div class="p-2 border"style="background: #ffeaa7;">
								<label class="text-uppercase font-weight-bold form-control text-center bg-transparent border-0"><i class="fas fa-book mr-1"></i>Duration of course</label>
								<li class="ml-2">There will be no issue related with internship timing & duration,You get start here if you feel felax and free time.</li>
								<li class="ml-2">Duration is decided according to topic complicity.</li>
								<li class="ml-2">There will be 3 to 4 topic vedio,each having 5 to 20 minute.</li>
								<li class="ml-2"><label>Selected Course period is</label></li>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="p-2 border"style="background: #ffeaa7;">
								<label class="text-uppercase font-weight-bold form-control text-center bg-transparent border-0"><i class="fas fa-info-circle mr-1"></i>Course related information</label>
								<li style="list-style: none;">levels for complition of course are given bellow
									<ul style="list-style: circle;">
										<li>Vedio learning</li>
										<li>task:-
											<ul>
												<li>MCQ type quesrtions(MAX-15Q)</li>
												<li>Code writting question(MAX-1Q)</li>
											</ul>
										</li>
									</ul>
								</li>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid mt-2 p-2 " style="border-radius: 10px;">
					<div class="row d-flex justify-content-center border-0 mx-2" style="border-radius: 12px;background:#F8EFBA;">
						<h3 class="form-control border-0 text-center text-uppercase font-weight-bold bg-transparent" style="font-size: 25px;">Vedios For Better Understanding</h3>
						<div class="d-flex justify-content-center">
							<form class="p-3" style="width: 50vw;">
								<img src="images/media player.svg" class="img-fluid mx-auto d-block mb-2 mt-0" style="width: 140px;height: auto;">
								<input type="text" name="get" class="form-control" placeholder="Enter code.....">
								<p class="text-center font-weight-bold text-dark" style="font-size: 13px;">Enter your course code like “Enter your code-1”,“Enter your code-2” & “Enter your code-3”,here 1,2 & 3 represent 1<sup>st</sup>video and 2<sup>nd</sup>video so it is required to write.</p>
								<input type="submit" name="play" value="SUBMIT & SHOW" class="mx-auto d-block my-1 btn btn-primary btn-sm font-weight-bold text-dark">
							</form>
						</div>
					</div>
					<div class="row d-flex justify-content-center border-0 mx-2 my-2 p-2" style="border-radius: 12px;background: #F8EFBA;">
						<h3 class="text-uppercase font-weight-bold form-control text-center border-0 bg-transparent" style="font-size: 25px;">MCQ type quesrtions(MAX-15Q)</h3>
						<div class="d-flex justify-content-center">
							<form class="p-3" style="width: 50vw;" method="Post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
								<img src="images/qpaper.svg" class="img-fluid mx-auto d-block mb-2 mt-0" style="width: 140px;height: auto;">
								<input type="text" name="mcq" class="form-control" placeholder="Enter code.....">
								<p class="text-center font-weight-bold text-dark" style="font-size: 13px;">Enter your course code like “Enter your code-1” OR “Enter your code-2”,here 1 And 2 represent 1<sup>st</sup> page and 2<sup>nd</sup> page so it is required to write.</p>
								<input type="submit" name="answer" value="SUBMIT & SHOW" class="mx-auto d-block my-1 btn btn-primary btn-sm font-weight-bold text-dark mybtnpaper" id="answerbtn">
							</form>
						</div>
					</div>
					<div class="my-2 mx-2 p-2 d-flex justify-content-center " style="border-radius: 12px;background: #ecf0f1;">
						<?php
						if (isset($_POST['answer'])) {
							$code = $_POST['mcq'];
							$con = mysqli_connect("localhost","root","","internship_reg") or die("connection failed");
						$q = "SELECT * FROM question_paper WHERE Paperscode = '$code'";
						$r = mysqli_query($con,$q);
						if ($r) {
						$info = mysqli_fetch_assoc($r);
						$db_path = $info['Filepath'];
						$open = fopen("$db_path","r");
						echo fread($open,filesize($db_path));
						
						}
						}
						?>
					</div>
					<div class="row d-flex justify-content-center border-0 mx-2 my-2 p-2" style="border-radius: 12px;background: #F8EFBA;">
						<h3 class="text-uppercase font-weight-bold form-control text-center border-0 bg-transparent" style="font-size: 25px;">Code writting question(MAX-1Q)</h3>
						<div class="d-flex justify-content-center">
							<form class="p-3" style="width: 50vw;" method="Post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
								<img src="images/code.svg" class="img-fluid mx-auto d-block mb-2 mt-lg-0 mt-sm-2" style="width: 140px;height: auto;">
								<input type="text" name="coding" class="form-control" placeholder="Enter code.....">
								<p class="text-center font-weight-bold text-dark" style="font-size: 13px;">Just write your cousre code,please make sure code must be valid.</p>
								<input type="submit" name="code" value="SUBMIT & SHOW" class="mx-auto d-block my-1 btn btn-primary btn-sm font-weight-bold text-dark" id="btncode">
							</form>
						</div>
					</div>
					<?php
					if (isset($_POST['code'])) {
						$wcode = $_POST['coding'];
						$conns =mysqli_connect("localhost","root","","internship_reg") or die("connection failed");
						$qry = "SELECT * FROM code_writting WHERE Papercode = '$wcode'";
						$_SESSION['r'] = mysqli_query($conns,$qry);
						mysqli_close($conns);
					}
					?>
					<div class="my-2 mx-2 p-2" style="border-radius: 12px;background: #ecf0f1;" >
						<div class="row d-flex justify-content-center my-1">
							<?php
							$r = $_SESSION['r'];
							while ($load = mysqli_fetch_assoc($r)) {
							?>
							<div class="col-sm-11 bg-transparent p-2 font-weight-bold" id="qus"><?php echo $load['Question']; ?></div>
							<?php
						    }
							?>
						</div>
						<div class="row d-flex justify-content-center my-1">
							<div class="col-sm-11 bg-transparent p-2 d-flex justify-content-center">
								<button class="btn btn-sm btn-warning text-dark font-weight-bold" id="editerbtn">Text Editer</button>
								<button class="btn btn-sm btn-info text-dark font-weight-bold ml-2" id="skipbtn">Skip</button>
							</div>
						</div>
						<div id="editer" style="display: none;width: 60vw;height: auto;" class="mx-auto">
							<form method="Post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
								<textarea class="bg-white border rounded" name="hello" style="width: 100%;height: auto;"></textarea>
								<input type="submit" name="done" value="Save" class="mt-2 mx-auto btn btn-sm btn-primary text-dark font-weight-bold">
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#btns').click(function() {
					$('#startbox').slideDown();
				});
				$('#btnt').click(function() {
					$('#contentbox').slideDown();
				});
				$('#btnt').dblclick(function() {
					$('#contentbox').slideUp();
				});
				$('#btns').dblclick(function() {
					$('#startbox').slideUp();
				});
				$('#editerbtn').click(function() {
					$('#editer').slideDown();
				});
				$('#skipbtn').click(function() {
					$('#qus').replaceWith("We need to rediract to next web-page just in single click.write code for given condition?");
				});
			});
		</script>
	</body>
</html>