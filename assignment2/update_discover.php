<?php include 'connectToHosting.php';?>
<?php 

$id=$_GET['id'];


$parts = explode("***",$id);


$cname=$_POST['cname'];

$disease_code=$_POST['disease_code'];

$first_enc_date=date('Y-m-d',strtotime($_POST['first_enc_date']));

header('location:index.php');


mysqli_query($conn,"update `Discover` set cname='$cname', first_enc_date='$first_enc_date',disease_code='$disease_code' where cname='$parts[0]' and disease_code='$parts[1]' ");

?>