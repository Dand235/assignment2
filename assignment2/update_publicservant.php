<?php include 'connectToHosting.php';?>
<?php 



$idGetten=$_GET['id'];

$department = $_POST['department'];
$email = $_POST['email'];
header('location:index.php');
mysqli_query($conn,"update `PublicServant` set department='$department',  email='$email' where email='$idGetten'");

?>