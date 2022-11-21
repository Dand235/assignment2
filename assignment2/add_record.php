<?php include 'connectToHosting.php';?>
<?php 
 
	$cname=$_POST['cname'];
	$total_deaths=$_POST['total_deaths'];
	$disease_code=$_POST['disease_code'];
	$total_patients=$_POST['total_patients'];
	$email=$_POST['email'];

 	header('location:index.php');
	mysqli_query($conn,"insert into `Record` (cname,total_deaths,disease_code,total_patients,email) values ('$cname','$total_deaths','$disease_code','$total_patients','$email')");


?>