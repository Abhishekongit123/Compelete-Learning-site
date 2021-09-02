<?php include "All links.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
</head>
<body>
	<div class="container">
		<h2 class="text-center font-italic"><u>Insert Data Into Database Using Ajax</u></h2>
		<div class="col-lg-7 mx-auto">
			<form id="myform" action="insertphp.php" method="post" class="m-2 p-3 bg-light">
			<div class="form-group">
				<label class="font-weight-bold font-italic">Full Name:</label>
				<input type="text" name="usernsme" id="fulln" class="form-control" placeholder="enter full name">
			</div>
			<div class="form-group">
				<label class="font-weight-bold font-italic">Password:</label>
				<input type="text" name="password" id="upass" class="form-control" placeholder="enter valid password">
			</div>
			<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-sm btn-info font-weight-bold text-dark">
		    </form>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			
			var form = $('#myform');

			$('#submit').click(function() {
				
				$.ajax({
					url: form.attr("action"),
					type: 'post',
					data: $(#myform input).serialize(),
					success: function(data) {
						consol.log(data);
					}
				});
			});
		});
	</script>
</body>
</html>