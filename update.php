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
   <title >Edit User</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <style type= "text/css">
      body{
    background-image: url("https://images.unsplash.com/photo-1472745433479-4556f22e32c2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80");
  }
       fieldset {
           margin : auto;
           margin-top: 100px;
            width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Update user</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
           <tr>
               <th>Title</th>
               <td><input type="text"  name="title" placeholder ="title" value="<?php echo $data['title'] ?>"  /></td>
           </tr >    
           <tr>
               <th>Author's</th>
               <td><input type= "text" name="author"  placeholder="Author" value ="<?php echo $data['author'] ?>" /></td >
           </tr>
           <tr>
               <th >Publishing Date</th>
               <td><input type ="date" name= "publish_date" placeholder= "Publishing Date" value= "<?php echo $data['publish_date'] ?>" /></td>
           </tr>

           <tr>
               <th >ISBN Code</th>
               <td><input type ="text" name= "isbn_code" placeholder= "ISBN Code" value= "<?php echo $data['isbn_code'] ?>" /></td>
           </tr>
           <tr>
               <th >Brief Description</th>
               <td><input type ="text" name= "brief_description" placeholder= "brief_description" value= "<?php echo $data['brief_description'] ?>" /></td>
           </tr>
          <tr>
               <th >Description</th>
               <td><input type ="text" name= "description" placeholder= "Description" value= "<?php echo $data['description'] ?>" /></td>
           </tr>
            <tr>
               <th >publisher</th>
               <td><input type ="text" name= "publisher" placeholder= "publisher" value= "<?php echo $data['publisher'] ?>" /></td>
           </tr>
           <tr>
               <th >category</th>
               <td><input type ="text" name= "category" placeholder= "category" value= "<?php echo $data['category'] ?>" /></td>
           </tr>
           <tr>
               <th >status</th>
               <td><input type ="text" name= "status" placeholder= "status" value= "<?php echo $data['status'] ?>" /></td>
           </tr>
           <tr>
               <th >image</th>
               <td><input type ="text" name= "image" placeholder= "image" value= "<?php echo $data['image'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['id']?>" />
               <td><button  type= "submit" class="btn btn-danger">Save Changes</button ></td>
               <td><a  href= "index.php"><button  type="button" class="btn btn-success">Back</button ></a ></td >
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php
}
?>