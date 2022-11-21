<?php include 'connectToHosting.php';?>
<?php 

$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `Country` where cname='$id'");
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
	<form method="POST" action="update_country.php?id=<?php echo $id; ?>">
		<label>Cname:</label><input type="text" value="<?php echo $row['cname']; ?>" name="cname">
		<label>Population:</label><input type="text" value="<?php echo $row['population']; ?>" name="population">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>