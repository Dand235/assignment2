<?php include 'connectToHosting.php';?>
<?php 



$id=$_GET['id'];


$cname = $_POST['cname'];
$email = $_POST['email'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$salary = $_POST['salary'];
$surname = $_POST['surname'];
header('location:index.php');



mysqli_query($conn,"update `Users` set cname='$cname', email='$email', name='$name', phone='$phone', salary='$salary' , surname='$surname' where email='$id' ");

?>