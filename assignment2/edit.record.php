<?php include 'connectToHosting.php';?>
<?php 

$id=$_GET['id'];

$parts = explode("***",$id);



$query=mysqli_query($conn,"select * from `Record` where email='$parts[0]' and cname='$parts[1]' and disease_code='$parts[2]'");

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
	<form method="POST" action="update_record.php?id=<?php echo $id; ?>">
		<label>email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
		<label>cname:</label><input type="text" value="<?php echo $row['cname']; ?>" name="cname">
		<label>disease_code:</label><input type="text" value="<?php echo $row['disease_code']; ?>" name="disease_code">
		<label>total_patients:</label><input type="text" value="<?php echo $row['total_patients']; ?>" name="total_patients">
		<label>total_deaths:</label><input type="text" value="<?php echo $row['total_deaths']; ?>" name="total_deaths">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>