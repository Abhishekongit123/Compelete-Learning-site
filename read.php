<style>
	table{
		width: 800px;
		margin-left: 20%;
		background-color: lightgray;
		border:2px solid black;
	}
	thead th{
		background-color: black;
		color: white;
		font-weight: bold;
		font-size: 20px;
	}
	tbody{
		background-color: white;
		text-align: center;
     }   
	tbody tr:nth-child(2n){
		background-color: #bdc3c7;
	}
	tbody tr:nth-child(2n-1){
		font-weight: bold;
		background-color: #ff9ff3;
	}
	.heading{
		width: 795px;
		margin-left: 20%;
		font-size: 35px;
		background-color:#ffbe76;
		color:#2c3e50;
		text-shadow: 4px 0px 1px #ecf0f1;
		font-weight: bold;
		text-align: center;
		border:2px solid black;
		border-radius: 10px;
	}
</style>
<div id="main">
<?php
   $conn = mysqli_connect("localhost","root","","learn_mysqli") or die("connection failed");
   $sql = "SELECT * FROM datalist_jee WHERE Age < 50 ";
   $result = mysqli_query($conn, $sql) or die("query unsuccessful");

   if (mysqli_num_rows($result) > 0) {
?>
<table>
	<h1 class="heading">Student Info.</h1>
	<thead>
		<th>Id</th>
		<th>Name</th>
		<th>Age</th>
		<th>Gender</th>
		<th>Cast</th>
		<th>Phone</th>
		<tbody>
			<?php
			  while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['Id']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td><?php echo $row['Age'];?></td>
				<td><?php echo $row['Gender'];?></td>
				<td><?php echo $row['Cast'];?></td>
				<td><?php echo $row['Phone'];?></td>
			</tr>
			<?php } ?>
		</tbody>
	</thead>
</table>
<?php }else{
	echo "<h2>No Record Found </h2>";
}
mysqli_close($conn) 
?>
</div>