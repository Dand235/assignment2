<?php include 'connectToHosting.php';?>
<?php 
	header('location:index.php');
	$id=$_GET['id'];
	
	mysqli_query($conn,"delete from `Country` where cname='$id'");



?>