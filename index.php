<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css\style.css">
</head>
<body>
<h2>Hotel Guest Information System</h2>

<div class="container">
<center>
<form action="adduser.php" method="post">
<div class="row">
<input type="submit" value="AddUser" name="add">
</div>
</form>


<form action="edituser.php" method="post">
<div class="row">
<input type="submit" value="Edit User" name="edit">
</div>
</form>


<form action="deleteuser.php" method="post">
<div class="row">
<input type="submit" value="Delete User" name="delete">
</div>
</form>
</center>



<?php
$dbhost='localhost';
	$dbuser='root';
	$dbpwrd='';
	$dbname='hgis';
	$conn=mysqli_connect($dbhost,$dbuser,$dbpwrd,$dbname)
	or die('Mysql Connection failed'.mysql_error());
	if(!$conn){
		die("Connection failed".mysql_error());
	}

$result = mysqli_query($conn,"SELECT * FROM guests");
if(mysqli_num_rows($result) > 0){
?>
<table style="width:100%">
<tr>
<td>Series Log Number</td>
<td>Name</td>
<td>Email</td>
<td>Phone Number</td>
<td>City</td>

</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["serieslognum"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["phonenum"]; ?></td>
<td><?php echo $row["city"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</body>
</html>