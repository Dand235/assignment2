<?php include 'connectToHosting.php';?>
<?php 
	      $degree = $_POST['degree'];
        $email = $_POST['email'];
 	header('location:index.php');
	mysqli_query($conn,"insert into `Doctor` (degree,email) values ('$degree','$email')");
	

?>