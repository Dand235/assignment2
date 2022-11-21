<?php include 'connectToHosting.php';?>
<?php 

$idGetten=$_GET['id'];

$description = $_POST['description'];
$id = $_POST['id'];
header('location:index.php');
mysqli_query($conn,"update `DiseaseType` set description='$description',  id='$id' where id='$idGetten'");
?>