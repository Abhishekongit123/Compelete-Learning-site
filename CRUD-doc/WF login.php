<?php 
 include 'all links.php';

$wf_name = $_POST['Name'];
$wf_email = $_POST['Email_id'];
$wf_password = $_POST['Password'];

$conn = mysqli_connect("localhost","root","","crud_doc") or die("connection failed");
$sql = "INSERT INTO workframe(Name,Email_id,Password) VALUES ('{$wf_name}','{$wf_email}','{$wf_password}')";
$result = mysqli_query($conn, $sql) or die("query unsuccessful");

   mysqli_close($conn);		
	
?>
<div class="container-sm my-3 p-2 d-flex justify-content-center text-white" style="background-color:#7158e2;">
	<h3 class="display-4 font-weight-bold text-center" style="text-shadow: 4px 3px 5px #ff3838">Framework Contant</h3>
</div>
<div class="container-sm mb-3 p-2 bg-light d-flex justify-content-center">
	<button id="CSSbtnload" class="btn btn-primary mx-3 ">Load CSS</button>
	<button id="JSbtnload" class="btn btn-primary mx-3 ">Load javascript</button>
	<button id="PHPbtnload" class="btn btn-primary mx-3 ">Load PHP</button>
	<button id="btnremove" class="btn btn-primary mx-3 mt-3 mt-lg-0">Remove</button>
</div>	
<div class="container-sm bg-light border border-dark mb-3" style="border-radius: 15px;" id="load">
	<p class="font-weight-bold text-center text-success" style="font-size: 22px;">Here,you will get detail concept about Clint-side framework.In this section we have CSS framework(server & client side),JavaScript and PHP.For start learnning click on the above button-link and enhance in your knowloge.
	</p>
	<p>
		<div class="container-sm p-2 text-center"><label>Developed by A.K Prajapati|All term and contation</label>
        <br><small>Legal||©copyright 2020 </small></div>
	</p>
</div>
<script type="text/javascript">
		$(document).ready(function() {
			$('#CSSbtnload').click(function() {
				$('#load img').remove();
				$('#load').load("CSSload.html");
			});
			$('#JSbtnload').click(function() {
				$('#load').load("JSL.html");
			});
			$('#PHPbtnload').click(function() {
				$('#load').load("PHP-Lo.html");
			});
			$('#btnremove').click(function() {
				$('#load').empty();
			});
		});
</script>