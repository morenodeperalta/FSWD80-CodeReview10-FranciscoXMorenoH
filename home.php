<?php
ob_start();
session_start();
require_once 'dbconnect.php';
// if session is not set this will redirect to login page
// select logged-in users details
$res=mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['users']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./../css/style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
<title>Welcome - <?php echo $userRow['userName']; ?></title>
</head>
<style>
body{
  background: rgb(222,221,217);
}
  


</style>
<body >
  <?php include_once "navbar.php" ?>
  <?php include_once "jumbotrone.php" ?>
  
         
       
          
 
 <div class ="manageUser">
   

            <?php
           $sql = "SELECT * FROM AdminTable WHERE active = 0";
           $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "

                <div class='offset-2 card mb-3 backgroundCard' style='max-width: 840px;'>
                    <div class='row no-gutters'>
                      <div class='col-md-4'>
                      <img src=".$row['image']." class='card-img' alt='".$row['title']." ".$row['author']."'>
                      <p class='card-text'><class='text-muted'> Publishing date: ".$row['publish_date']."</small></p>
      

                        <!-- Button trigger modal -->
                        <button type='button' class='btn btn-success' data-toggle='modal' data-target='#exampleModal".$i."'>
                          Know more
                        </button>

                        <!-- Modal -->
                        <div class='modal fade' id='exampleModal".$i."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                          <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h5 class='modal-title' id='exampleModalLabel'>'".$row['title']." by: ".$row['author']."'</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                  <span aria-hidden='true'>&times;</span>
                                </button>
                              </div>
                              <div class='modal-body'>
                               <p class='card-text d-flex justify-content-around'>" .$row['description']."</p>
                                <li class='card-text'>" .$row['isbn_code']."></li>
                                <li class='card-text'>" .$row['publisher']."></li>
                                <li>" .$row['category']."</li>
                                <li>" .$row['status']."</li>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class='col-md-8'>
                        <div class='card-body'>
                          <h5 class='card-title'>".$row['title']." ".$row['author']."</h5>
                          <p> " .$row['brief_description']."</p>
                        </div>
                      </div>
                    </div>
                </div>

                   " ;
               $i++;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
</div>
       
 
</body>
</html>
<?php ob_end_flush(); ?>