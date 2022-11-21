<?php include 'connectToHosting.php';?>
<?php


	$id=$_GET['id'];	


	$parts = explode("***",$id);


	$cname=$parts[0];

	$disease_code=$parts[1];

    header('location:index.php');
	mysqli_query($conn,"delete from `Discover` where cname='$cname' and  disease_code='$disease_code'");


?>