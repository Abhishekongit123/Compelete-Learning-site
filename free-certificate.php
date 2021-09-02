<?php session_start();?>
<?php include "All links.php" ?>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
<div class="container-fluid p-2 bg-light">
	<div class="container-sm bg-transparent px-5 py-3 pb-5 my-5"style="background-image: url('CRUD-doc/images/bgofcertificate.jpg');background-repeat: no-repeat;background-size: 100% 100%;color: #6F1E51;">
		<h4 class="text-sm-center mt-4" style="font-family: 'UnifrakturMaguntia', cursive;font-size: 45px;">Certificate for Completion</h4>
		<div class="container-sm justify-content-center" style="background: transparent;">
			<p class="text-center font-weight-bold"style="font-size:22px;color:#B53471;font-family: 'Playball', cursive;">This certificate is proudly presented for</p>
			<label class="d-block text-center" style="font-size:35px;font-family: 'Libre Baskerville', serif; color: #ED4C67;">Web Development</label>
			<p class="d-block text-center font-weight-bold" style="font-size:22px;color:#B53471;font-family: 'Playball', cursive;">
			This award is given to Mr/Miss<span class="mx-2 font-italic" style="font-family:none;color:black;"><?php echo $_SESSION['name']; ?></span>S/O MR<span class="mx-2 font-italic" style="font-family: none;color: black;"><?php echo $_SESSION['father']; ?></span>for her/his hard work,dedication in completing the <span class="mx-2 font-italic" style="font-family: none;color:black;"><?php echo $_SESSION['coursename'];?></span> from date<span class="mx-sm-2 font-italic" style="font-family: none;color: black;">25th May,2020</span>to<span class="mx-2" style="font-family: none;color: black;"><?php echo date("dS M,Y"); ?></span><br> held under sponsorship of Mr.J.P Verma & Miss Priya Gupta.</p>
			<div class="container-fluid bg-transparent px-5 d-flex justify-content-center ">
				<label class="mx-auto mt-0" style="font-family: 'UnifrakturMaguntia', cursive; font-size: 20px;"><br>
					<span class="font-weight-bold" style="font-family: none;">Abhishek Kumar</span>
					<small class="mx-auto d-block" style="font-size: 15px;">Signature of Superviser</small>
				</label><br>
				<img src="images/reward.svg" style="width: 180px;height: 180px;">
				<label class="mx-auto mt-4" style="font-family: 'UnifrakturMaguntia', cursive; font-size: 20px;">Issue Date:<br><span style="font-family:none;"><?php echo date("dS F,Y"); ?></span></label>
			</div>
		</div>
	</div>
</div>
