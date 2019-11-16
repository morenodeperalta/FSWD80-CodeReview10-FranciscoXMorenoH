<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <title>PHP CRUD  |  Add a new Item</title>

   <style type= "text/css">
       body{

    background-image: url("https://images.unsplash.com/photo-1472289065668-ce650ac443d2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80");
  }

       fieldset {
           margin: auto;
            margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
       }
   </style>

</head>
<body>

<fieldset >
   <legend class="offset-3">Add a new Item</legend>

   <form  class="offset-3" action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
               <th>Tittle</th >
               <td><input  type="text" name="title"  placeholder="Title" /></td >
           </tr>    
           <tr>
               <th>Author's Name</th>
               <td><input  type="text" name="author" placeholder="author" /></td>
           </tr>
           <tr>
               <th>Date of Publishing</th>
               <td><input type="date"  name="publish_date" placeholder ="publishing date" /></td>
           </tr>
            <tr>
               <th >ISBN Code</th>
               <td><input type ="text" name= "isbn_code" placeholder= "ISBN Code"/></td>
           </tr>
          <tr>
               <th >Brief Description</th>
               <td><input type ="text" name= "brief_description" placeholder= "brief_description"/></td>
           </tr>
          <tr>
               <th >Description</th>
               <td><input type ="text" name= "description" placeholder= "Description"/></td>
           </tr>
            <tr>
               <th >publisher</th>
               <td><input type ="text" name= "publisher" placeholder= "publisher"/></td>
           </tr>
           <tr>
               <th >category</th>
               <td><input type ="text" name= "category" placeholder= "category"/></td>
           </tr>
           <tr>
               <th >status</th>
               <td><input type ="text" name= "status" placeholder= "status"/></td>
           </tr>
            <tr>
               <th>image</th>
               <td><input  type="text" name="image" placeholder="image"/></td>
           </tr>
           <tr>
               <td><button type ="submit" class="btn btn-danger">Insert Item</button></td>
               <td ><a href= "home.php"><button  type="button" class="btn btn-success">Back</ button></a></td>
           </tr >
       </table>
   </form>

</fieldset >

</body>
</html>