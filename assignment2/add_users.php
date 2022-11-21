<?php include 'connectToHosting.php';?>
<?php 
$email=$_POST['email'];
$cname=$_POST['cname'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$salary=$_POST['salary'];
$surname=$_POST['surname'];
header('location:index.php');
mysqli_query($conn,"insert into `Users` (email,cname,name,phone,salary,surname) values ('$email','$cname','$name','$phone','$salary','$surname')");


?>