<?php
 session_start();
?>
<?php include 'all links.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>gateway</title>
	<link rel="stylesheet" type="text/css" href="CSS3 Style Code(CssSC)/admin.css">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function() {
			$('#pbox').click(function() {
				$('.pdll').slideDown("fast");
			});
			$('#fbox').click(function() {
				$('.pdll').slideUp("fast");
			});


			$('#fbox').click(function() {
				$('.fdll').slideDown("fast");
			});
			$('#pbox').click(function() {
				$('.fdll').slideUp("fast");
			});


			$('#mbox').dblclick(function() {
				$('.fdll').slideUp("fast");
				$('.pdll').slideUp("fast");
			});
			$('#mbody').dblclick(function() {
				$('.fdll').slideUp("fast");
				$('.pdll').slideUp("fast");
			});
		});
	</script>
</head>
<body style="background-image: url('images/payment.jpg');background-repeat: no-repeat;background-size: 100% 100%;" id="mbody">
<div class="pb px-3 h-auto" id="mbox">
	<h4 class="text-center py-2">Certificate Download Options</h4>
	<div class="container-fluid my-2 p-2 d-flex justify-content-center">
		<i class="fas fa-clipboard-check mx-3" style="font-size:22px;color:#01a3a4;"><label class="mx-2 font-weight-normal text-dark" style="font-size: 20px;"><?php echo $_SESSION['coursename'];?><span class="ml-1" style="color:#c0392b;"><?php echo $_SESSION['permimum_select']; ?></span></label></i>
		<i class="fas fa-user-tie" style="font-size:22px;color:#ff9f43;"><label class="mx-2 font-italic text-dark" style="font-family: 'Libre Baskerville', serif;font-size: 15px;"><?php echo $_SESSION['name'];?></label></i>
	</div>
	<div class="container px-4">
		<div class="row gx-5 justify-content-center">
			<div class="col-sm-5">
				<div class="p-3 border text-center text-darks font-weight-bold border-0 rounded-sm pgw" style="background-color:#fbc531;" id="pbox">Premium certificate<br>
					<small class="text-center text-dark font-weight-bold font-italic">get all courses certificate by gov. institute for $200/-</small><br>
					<a href="#!" style="display: none;" class="btn btn-transparent btn-sm text-white font-weight-bold font-italic pdll">Download Now<i class="fas fa-download mx-2" style="color:#17c0eb;"></i></a>
				</div>
			    <div class="col-sm-12 text-center py-2">
			    	<strong class="font-weight-bold text-dark">Required to fill form</strong>
			    	<p class="font-weight-bold text-muted my-2">Exciussive eccess <strong class="font-weight-bold font-italic" style="color:#fbc531;">+10 premium courses</strong><br>download now</p>
			    </div>
			</div>
			<div class="col-sm-5">
				<div class="p-3 border text-center text-dark font-weight-bold border-0 rounded-sm fgw" style="background-color:#7bed9f;" id="fbox">Free download<br>
					<small class="text-center text-dark font-weight-bold font-italic">get all courses certificate by gov. institute free</small><br>
					<a href="free-certificate.php" style="display: none;" class="btn btn-transparent btn-sm text-white font-weight-bold font-italic fdll">Download Now<i class="fas fa-download mx-2" style="color:#3B3B98;"></i></a>
				</div>
				<div class="col-sm-12 py-2 text-center">
					<strong class="font-weight-bold text-dark">NO required to fill form</strong>
			    	<p class="font-weight-bold text-muted my-2">Exciussive eccess <strong class="font-weight-bold font-italic" style="color:#4cd137;">+20 free courses</strong><br>download now</p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>