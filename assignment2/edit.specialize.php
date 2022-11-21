<?php include 'connectToHosting.php';?>
<?php 


$id=$_GET['id'];

$parts = explode("***",$id);


$query=mysqli_query($conn,"select * from `Specialize` where id='$parts[0]' and email='$parts[1]'");

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
	<form method="POST" action="update_specialize.php?id=<?php echo $id; ?>">
		<label>id:</label><input type="text" value="<?php echo $row['id']; ?>" name="id">
		<label>email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>