<?php 

require_once '../dbconnect.php';

if ($_POST) {
   $id = $_POST['id'];

   $sql = "DELETE FROM AdminTable WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
       echo "<h5>Successfully deleted!!</h5>" ;
       echo "<a href='../adminpanel.php'><button type='button'class='btn btn-success'>Back</button></a>";
   } else {
       echo "Error updating record : " . $conn->error;
   }

   $conn->close();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="">
</head>
<style>
	body{
		background-image: url("https://images.unsplash.com/photo-1533227268428-f9ed0900fb3b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1479&q=80");
	}
</style>
<body>
	
</body>
</html>