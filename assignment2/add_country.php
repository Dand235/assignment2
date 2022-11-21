<?php include 'connectToHosting.php';?>
<?php
	header('location:index.php');
 
	$cname=$_POST['cname'];
	$population=$_POST['population'];
 
	mysqli_query($conn,"insert into `Country` (cname,population) values ('$cname','$population')");
	


?>