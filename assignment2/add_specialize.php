<?php include 'connectToHosting.php';?>
<?php 

	$email=$_POST['email'];

	$id=$_POST['id'];
	header('location:index.php');
 
	mysqli_query($conn,"insert into `Specialize` (email,id) values ('$email','$id')");

?>