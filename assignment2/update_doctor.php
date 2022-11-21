<?php include 'connectToHosting.php';?>
<?php 



$idGetten=$_GET['id'];

$degree = $_POST['degree'];
$email = $_POST['email'];
header('location:index.php');
mysqli_query($conn,"update `Doctor` set degree='$degree',  email='$email' where email='$idGetten'");

?>