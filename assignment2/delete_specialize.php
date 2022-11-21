<?php include 'connectToHosting.php';?>
<?php 

$id=$_GET['id'];	


$parts = explode("***",$id);

header('location:index.php');


mysqli_query($conn,"delete from `Specialize` where id='$parts[0]' and  email='$parts[1]'");



?>