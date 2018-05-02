<!DOCTYPE html>

<html lang=“en”>

<head>

	<!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<title>ShareBoard</title>

	<meta name=“description” content=“Bootstrap”>

	<meta name="author" content="Imon Dela Rosa">
 
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

 


<nav class="navbar navbar-expand-lg navbar-light bg-light p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <a class="navbar-brand" href="#">Shareboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- <li class="nav-item active"> -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ?>shares">Shares</a>
      </li>
    </ul>

     <ul class="navbar-nav navbar-right">
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
         <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
      </li>
     
        <div class="btn-group mr-2">
            <a class="btn btn-outline-primary" href="<?php echo ROOT_URL; ?>users/logout">logout</a></div>

      <?php else : ?>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <a class="btn btn-outline-primary" href="<?php echo ROOT_URL ?>users/login"">Login</a>
          </div>
          <a class="btn btn-outline-success" href="<?php echo ROOT_URL ?>users/register"">Register</a>
        </div>
      <?php endif; ?>
      <?php //print_r($_SESSION); ?>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>


 


<div class="container">
    <div class="row">
      <div class="col-sm-12">
          <div class="col-sm-6">
             <?php Messages::display(); ?>
          </div>
         
        <?php require($view); ?>
      </div>
      
    </div>
</div>



<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
     <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
	//$(document).ready(function(){});
</script>
</body>
</html>

 