<?php include 'connectToHosting.php';?>
<?php 


$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `PublicServant` where email='$id'");
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
	<form method="POST" action="update_publicservant.php?id=<?php echo $id; ?>">
		<label>email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
		<label>department:</label><input type="text" value="<?php echo $row['department']; ?>" name="department">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>