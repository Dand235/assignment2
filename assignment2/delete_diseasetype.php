<?php include 'connectToHosting.php';?>
<?php 
$id=$_GET['id'];
header('location:index.php');	
mysqli_query($conn,"delete from `DiseaseType` where id='$id'");

?>