<?php include 'connectToHosting.php';?>
<?php 

$description = $_POST['description'];
$id = $_POST['id'];
header('location:index.php');
mysqli_query($conn,"insert into `DiseaseType` (description,id) values ('$description','$id')");


?>