<?php
$fname=$_POST['fname'];
$email=$_POST['email'];
$phonenum=$_POST['phonenum'];
$city=$_POST['city'];
$button=$_POST['save'];

if($button=='Save'){
	$dbhost='localhost';
	$dbuser='root';
	$dbpwrd='';
	$dbname='hgis';
	$conn=mysqli_connect($dbhost,$dbuser,$dbpwrd,$dbname)
	or die('Mysql Connection failed'.mysql_error());
	if(!$conn){
		die("Connection failed".mysql_error());
	}
	$sql="INSERT INTO guests(name, email, phonenum, city) VALUES ('$fname', '$email', '$phonenum', '$city')";
	mysqli_query($conn, $sql);
}
?>

<html>
<head>
</head>
<body>
<h2>RETURN TO index.php</h2>
</body>
</html>