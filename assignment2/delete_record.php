<?php include 'connectToHosting.php';?>
<?php 
$id=$_GET['id'];	


$parts = explode("***",$id);
header('location:index.php');

mysqli_query($conn,"delete from `Record` where email='$parts[0]' and cname='$parts[1]' and disease_code='$parts[2]'");


?>