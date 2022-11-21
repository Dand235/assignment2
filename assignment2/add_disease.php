<?php include 'connectToHosting.php';?>
<?php 
 
	      $description = $_POST['description'];
        $disease_code = $_POST['disease_code'];
        $id = $_POST['id'];
        $pathogen = $_POST['pathogen'];
  header('location:index.php');
	mysqli_query($conn,"insert into `Disease` (description,disease_code,id,pathogen) values ('$description','$disease_code','$id','$pathogen')");
	


?>