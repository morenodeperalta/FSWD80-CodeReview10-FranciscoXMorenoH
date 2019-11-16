<?php 

require_once '../dbconnect.php';

if ($_POST) {
   $title = $_POST['title'];
   $author = $_POST['author'];
   $PD = $_POST['publish_date'];
   $img = $_POST['image'];
   $isbn = $_POST[ 'isbn_code'];
   $briefdescription = $_POST['brief_description'];
   $description = $_POST[ 'description'];
   $publisher = $_POST[ 'publisher'];
   $category = $_POST[ 'category'];
   $status = $_POST[ 'status'];

   $id = $_POST['id'];

   $sql = "UPDATE AdminTable SET title = '$title', author = '$author', publish_date = '$PD' , image = '$img', isbn_code = '$isbn',brief_description = '$briefdescription' ,description = '$description', publisher = '$publisher', category = '$category', status='$status' WHERE id = {$id}" ;
   if($conn->query($sql) === TRUE) {
       echo  "<h5 class= 'tittle'>Successfully Updated</h5>";
       echo "<a href='../update.php?id=" .$id."'><button type='button' class='btn btn-danger'>Back</button></a>";
       echo  "<a href='../adminpanel.php'><button type='button'class='btn btn-success'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $conn->error;
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
  .tittle{
    color: white;
  }
  body{
    background-image: url("https://images.unsplash.com/photo-1504805572947-34fad45aed93?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80");
  }
</style>
<body>
  
</body>
</html>