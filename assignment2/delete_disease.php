<?php include 'connectToHosting.php';?>
<?php 

$id=$_GET['id'];
header('location:index.php');	
mysqli_query($conn,"delete from `Disease` where disease_code='$id'");



?>