<?php echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Welcome </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      

      <li class="nav-item">
         <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"> Hi! '.$userRow["userName"]. " ".$userRow["userEmail"].'</a>  
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a  href="logout.php?logout">Sign Out</a></button>
    </form>
  </div>
</nav>'
?>