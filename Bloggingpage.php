<?php include "All links.php" ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<style>
			*{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}
			#cbtn{
				font-weight: bold;
				background:#fbc531;
				color: #192a56;
				cursor: pointer;
			}
			#cbtn:focus{
				background: #4cd137;
				color: #F8EFBA;
				outline: none;
				box-shadow: none;
			}
			.plusicon{
				color:#b71540;
			}
			.postdiv{
				box-shadow: 0px 0px 15px #ced6e0;
			}
			#bloggername{
				color: #95a5a6;
				font-size: 15px;
			}
			#scrool::-webkit-scrollbar{
				width: 6px;
			}
			#scrool::-webkit-scrollbar-track{
				background: #f1f1f1;
			}
			#scrool::-webkit-scrollbar-thumb {
		background: #888;
		}
		#scrool::-webkit-scrollbar-thumb:hover {
		background: #555;
		}
		</style>
	</head>
	<body>
		<header class="container-fluid sticky-top py-2" style="background: #a29bfe;">
			<label style="color: #0a3d62;font-weight: bold;">BlogWritting</label><i class="fas fa-question-circle float-right mt-1" style="font-size: 20px;background: red;color: white;"></i>
			<a href="#!" class="btn btn-sm text-uppercase float-right mr-2" id="cbtn"><i class="fas fa-plus mr-1 plusicon"></i>create page</a>
		</header>
		<div class="container-fluid py-4 px-3" style="background-image: url('images/bg2.jpg');background-repeat: no-repeat; background-size: 100% 100%;height:300px;">
			<h2 class="text-center">Welcome to the world of blogging </h2>
			<label class="text-center" style="width: 100%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt.</label>
		</div>
		<div class="container-fluid my-3">
			<div class="row">
				<div class="col-sm-8 d-flex justify-content-center">
					<div class=" col-12 border m-3 p-2 postdiv" style="width:auto;height: auto;border-radius: 13px;">
						<h5 style="width: 100%;text-align: center;">Blog Title<br><small>topic subtitle</small></h5>
						<img src="images/building.jpg" class="img-fluid img-thumbnail rounded">
						<label style="width: 100%;"><i class="fas fa-user-tie ml-1 mt-2" style="font-size: 18px;color: #e67e22;"><label class="ml-1 font-weight-bold" id="bloggername">Name of user</label></i><i class="far fa-calendar-alt float-right mr-1 mt-2" style="font-size: 18px;color: #8e44ad;"><label class="ml-1 font-weight-bold" id="bloggername">date & time</label></i></label>
						<p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				<div class="col-sm m-3 p-2 d-flex justify-content-center" style="width:100%;height: auto;border-radius: 13px;">
					<div class="row d-flex justify-content-center" style="width: 100%;">
						<div class="col-sm-11" style="border: 1px solid black;width: 100%;height: 400px;" id="scrool">
							<div class="media">
								<img class="align-self-start mr-2 img-fluid" style="width: 60px;height: auto;" src="images/CSS.png" alt="image not uploaded">
								<div class="media-body">
									<h6 class="mt-0">Top-aligned media</h6>
									<small>text....</small>
								</div>
							</div>
						</div>
						<div class="col-11 bg-warning" style="border: 1px solid black;width: 100%;height: 400px;" id="scrool">
							<div class="media">
								<img class="align-self-start mr-2 img-fluid" style="width: 60px;height: auto;" src="images/CSS.png" alt="image not uploaded">
								<div class="media-body">
									<h6 class="mt-0">Top-aligned media</h6>
									<small>text....</small>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>