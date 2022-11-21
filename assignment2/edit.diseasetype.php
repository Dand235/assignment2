<?php include 'connectToHosting.php';?>
<?php 

$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `DiseaseType` where id='$id'");
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
	<form method="POST" action="update_diseasetype.php?id=<?php echo $id; ?>">
		<label>description:</label><input type="text" value="<?php echo $row['description']; ?>" name="description">
		<label>id:</label><input type="text" value="<?php echo $row['id']; ?>" name="id">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>