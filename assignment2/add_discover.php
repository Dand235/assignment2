<?php include 'connectToHosting.php';?>
<?php 
	$cname=$_POST['cname'];
	$disease_code=$_POST['disease_code'];
	$first_enc_date=date('Y-m-d',strtotime($_POST['first_enc_date']));

 	header('location:index.php');
	mysqli_query($conn,"insert into `Discover` (cname,disease_code,first_enc_date) values ('$cname','$disease_code','$first_enc_date')");
	


?>