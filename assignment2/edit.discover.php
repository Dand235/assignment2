<?php include 'connectToHosting.php';?>
<?php 


$id=$_GET['id'];

$parts = explode("***",$id);



$query=mysqli_query($conn,"select * from `Discover` where cname='$parts[0]' and disease_code='$parts[1]'");

$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html>
<style>
	<?php include 'form.css'; ?>
</style>
<head>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update_discover.php?id=<?php echo $id; ?>">
		<label>Cname:</label><input type="text" value="<?php echo $row['cname']; ?>" name="cname">
		<label>disease_code:</label><input type="text" value="<?php echo $row['disease_code']; ?>" name="disease_code">
		<label>first_enc_date:</label><input type="date" value="<?php echo $row['first_enc_date']; ?>" name="first_enc_date">

		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>