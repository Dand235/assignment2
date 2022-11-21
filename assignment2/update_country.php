<?php include 'connectToHosting.php';?>
<?php 


$id=$_GET['id'];

$cname=$_POST['cname'];
$population=$_POST['population'];
header('location:index.php');

mysqli_query($conn,"update `Country` set cname='$cname', population='$population' where cname='$id'");

?>