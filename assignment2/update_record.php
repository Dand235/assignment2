<?php include 'connectToHosting.php';?>
<?php 



$id=$_GET['id'];


$parts = explode("***",$id);


$cname=$_POST['cname'];
$total_deaths=$_POST['total_deaths'];
$disease_code=$_POST['disease_code'];
$total_patients=$_POST['total_patients'];
$email=$_POST['email'];



header('location:index.php');

mysqli_query($conn,"update `Record` set cname='$cname', total_deaths='$total_deaths',disease_code='$disease_code',total_patients='$total_patients',email='$email' where email='$parts[0]' and cname='$parts[1]' and disease_code='$parts[2]'");

?>