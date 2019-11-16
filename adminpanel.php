<?php
ob_start();
session_start();
require_once 'dbconnect.php';
// if session is not set this will redirect to login page
// select logged-in users details

if(isset($_SESSION["user"])){
	header('Location: home.php');
}

$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['admin']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome - <?php echo $userRow['userName' ]; ?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php include_once "navbar.php" ?>
  <?php include_once "jumbotrone.php" ?>
  
<body >         
 
 <div class ="manageUser">
   <a class="d-flex justify-content-center" href= "create.php"><button type="button" class="btn btn-success" >Add a new Item</button></a>
      

            <?php
           $sql = "SELECT * FROM AdminTable WHERE active = 0";
           $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "
                   
                   <div class='offset-2 card mb-3' style='max-width: 840px;'>
  <div class='row no-gutters'>
    <div class='col-md-4'>
      <img src=".$row['image']." class='card-img' alt='".$row['title']." ".$row['author']."'>
      <p class='card-text'><class='text-muted'> Publishing date: ".$row['publish_date']."</small></p>
      <a href='update.php?id=" .$row['id']."'><button type='button' class='btn btn-warning'>Edit</button></a>
      <a href='delete.php?id=" .$row['id']."'><button type='button' class='btn btn-danger'>Delete</button></a>
    </div>
    <div class='col-md-8'>
      <div class='card-body'>
        <h5 class='card-title'> Title: ".$row['title']." ".$row['author']."</h5>
        <p class='card-text d-flex justify-content-around'>" .$row['description']."</p>
        <p class='card-text'>" .$row['brief_description']."</p>
        <p class='card-text'>" .$row['isbn_code']."</p>
        <p class='card-text'>" .$row['publisher']."</p>
        <p>" .$row['category']."</p>
        <p>" .$row['status']."</p>
      </div>
    </div>
  </div>
</div>
                       " ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>

           
    
 
</div>
       
 
</body>
</html>
<?php ob_end_flush(); ?>