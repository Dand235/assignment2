<?php include 'connectToHosting.php';?>
<?php 


$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `Disease` where disease_code='$id'");
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
	<form method="POST" action="update_disease.php?id=<?php echo $id; ?>">
		<label>description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
		<label>disease_code:</label><input type="text" value="<?php echo $row['disease_code']; ?>" name="disease_code">
		<label>id:</label><input type="text" value="<?php echo $row['id']; ?>" name="id">
		<label>pathogen:</label><input type="text" value="<?php echo $row['pathogen']; ?>" name="pathogen">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>