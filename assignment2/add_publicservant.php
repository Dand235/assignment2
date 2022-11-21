<?php include 'connectToHosting.php';?>
<?php 
 
	      $department = $_POST['department'];
        $email = $_POST['email'];
 	header('location:index.php');
	mysqli_query($conn,"insert into `PublicServant` (department,email) values ('$department','$email')");
	

?>