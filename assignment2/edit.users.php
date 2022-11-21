<?php include 'connectToHosting.php';?>
<?php 


$id=$_GET['id'];




$query=mysqli_query($conn,"select * from `Users` where email='$id'");

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
	<form method="POST" action="update_users.php?id=<?php echo $id; ?>">
		<label>email:</label><input type="text" value="<?php echo $row['email']; ?>" name="email">
		<label>cname:</label><input type="text" value="<?php echo $row['cname']; ?>" name="cname">
		<label>name:</label><input type="text" value="<?php echo $row['name']; ?>" name="name">
		<br><br>
		<label>phone:</label><input type="text" value="<?php echo $row['phone']; ?>" name="phone">
		<label>salary:</label><input type="text" value="<?php echo $row['salary']; ?>" name="salary">
		<label>surname:</label><input type="text" value="<?php echo $row['surname']; ?>" name="surname">
		<input type="submit" name="submit" value="edit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>