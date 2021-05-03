<!DOCTYPE html>
<html>
<head>
	<title>Activity Logs</title>
	 <link rel = "stylesheet"
      href = "admin.css">

</head>
<body style = "background-color: #534679">
	<table class="all_table" align="center">
		<tr>
			<th colspan="4" id="head">Activity Logs</th>
		</tr>
		<t>
			<th>ID</th>
			<th>User</th>
			<th>Activity</th>
			<th>Time</th>
		</t>

	
		<?php 
		$con = mysqli_connect('localhost','root','','infoassu');
		$query = ("SELECT * FROM logs");
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)){
		?>
		<tr>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['user'] ;?></td>
		<td><?php echo $row['activity']; ?></td>
		<td><?php echo $row['time']; ?></td>
		
		</tr>	
	<?php 
}
	 ?>		
	 <a href="ceid.php"><button>Logout</button></a>
	
		
		
	</table>

</body>
</html>