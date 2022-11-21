<?php include 'connectToHosting.php';?>
<?php 


$idGetten=$_GET['id'];

$description = $_POST['description'];
$disease_code = $_POST['disease_code'];
$id = $_POST['id'];
$pathogen = $_POST['pathogen'];	
header('location:index.php');
mysqli_query($conn,"update `Disease` set description='$description', disease_code='$disease_code', id='$id', pathogen='$pathogen' where disease_code='$idGetten'");

?>