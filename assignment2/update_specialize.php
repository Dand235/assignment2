<?php include 'connectToHosting.php';?>
<?php 



$idGetten=$_GET['id'];


$parts = explode("***",$idGetten);


$email=$_POST['email'];

$id=$_POST['id'];


header('location:index.php');


mysqli_query($conn,"update `Specialize` set email='$email', id='$id' where id='$parts[0]' and email='$parts[1]' ");

?>