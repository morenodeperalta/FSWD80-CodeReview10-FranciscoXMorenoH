<?php 

require_once 'dbconnect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM AdminTable WHERE id = {$id}" ;
   $result = $conn->query($sql);
   $data = $result->fetch_assoc();

   $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete User</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
	body{
		background-image: url("https://images.unsplash.com/photo-1491234323906-4f056ca415bc?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80");
	}
</style>

<body>

<h3>Do you really want to delete this user?</h3>
<form action ="actions/a_delete.php" method="post">

   <input type="hidden" name= "id" value="<?php echo $data['id'] ?>" />
   <button type="submit" class="btn btn-danger">Yes, delete it!</button >
   <a href="adminpanel.php"><button type="button" class="btn btn-success">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>