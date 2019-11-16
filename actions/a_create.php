<?php 

require_once '../dbconnect.php';

if ($_POST) {
   $title = $_POST['title'];
   $author = $_POST['author'];
   $PD = $_POST[ 'publish_date'];
   $img = $_POST[ 'image'];
   $isbn = $_POST[ 'isbn_code'];
   $briefdescription = $_POST['brief_description'];
   $description = $_POST[ 'description'];
   $publisher = $_POST[ 'publisher'];
   $category = $_POST[ 'category'];
   $status = $_POST[ 'status'];

   $sql = "INSERT INTO AdminTable (title, author, publish_date, image, isbn_code, brief_description, description, publisher, category, status) VALUES ('$title', '$author', '$PD', '$img', '$isbn','$briefdescription', '$description', '$publisher', '$category', '$status')";
    if($conn->query($sql) === TRUE) {
       echo "<h5 class='testititle'>New Record Successfully Created</h5>" ;
       echo "<a href='../create.php'><button type='button'class='btn btn-success'>Back</button></a>";
        echo "<a href='../adminpanel.php'><button type='button' class='btn btn-danger'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->conn_error;
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
  .testititle{
    color:  white;
  }
  body{
    background-image: url("https://images.unsplash.com/photo-1455849318743-b2233052fcff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80");
  }
</style>
<body>
  
</body>
</html>