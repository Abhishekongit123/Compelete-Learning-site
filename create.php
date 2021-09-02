<style>
	*{
		padding: 0;
		margin:0;
		box-sizing: border-box;
	}
	#main_content{
		width: 80%;
		margin-left: 10%;
		height: auto;
		padding: 15px;
		margin-top: 5%;
		background-color: #2c3e50;
		border-radius: 20px;
		color: white;
	}
	.post-form{
		width: 450px;
		height: auto;
		margin-top: 1%;
		margin-left: 30%;
	}
	.form-group{
		width: 450px;
		height: 40px;
	}
	.form-group label{
		font-weight: bold;
	}
	.form-group input{
		width: 350px;
		height: 30px;
		border:1.5px solid black;
		box-shadow: 0px 0px 7px white;
		padding: 5px;
		font-size: 15px;
		font-weight: bold;
		float: right;
		margin-right: 10px;
	}
	select{
		width: 350px;
		height: 30px;
		border:1.5px solid black;
		box-shadow: 0px 0px 7px white;
		float: right;
		margin-right: 10px;
	}
	.submit{
		width: 100px;
		height: 50px;
		margin-left: 48%;
		margin-top: 2%;
		border:none;
		background-color: #44bd32;
	}
</style>
<div id="main_content">
	<h2>Add New record</h2>
	<form class="post-form" action="savedata.php" method="post">
		<div class="form-group">
			<label>Name:</label>
			<input type="text" name="sname">
		</div>
		<div class="form-group">
			<label>Roll No.:</label>
			<input type="text" name="srollno">
		</div>
		<div class="form-group">
			<label>Class:</label>
			<select name="class">
				<option value="selected disabled">Select Class</option>
				<option value="1">B-Tech</option>
				<option value="2">M-Tech</option>
				<option value="3">BBA</option>
				<option value="4">B.com</option>
			</select>
		</div>
		<div class="form-group">
			<label>Phone No.:</label>
			<input type="text" name="sphone">
		</div>
		<input type="submit" class="submit" value="Save" />
	</form>
</div>