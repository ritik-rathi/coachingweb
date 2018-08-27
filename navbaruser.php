
<?php

session_start();
if (!isset($_SESSION['email']))
{
    header('Location: navbar.php');
    exit();
}

?>
<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>



  <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
        <div class="container">
  <a class="navbar-brand"  href="#">hiii <?php
    
     $link =mysqli_connect("localhost","root","",'test');
     $f=$_SESSION['email'];
     $name= "SELECT name from `user` where email='$f'";
     $get=mysqli_query($link,$name);
     $result=mysqli_fetch_assoc($get);
      echo $result["name"]; ?>
    
</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="user.php"><span class="label label-default" style="background-color:red ;
        color:white">new</span>Results </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" ><span class="label label-default" style="background-color:red; color:white">new</span>Downloads</a> 
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">Courses </a> 
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">fee Status</a> 
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">Performance</a> 
      </li>
      
</ul>
<ul class="navbar-nav ml-auto">
  <li class="nav-item ">
        <a class="nav-link " href="logout.php"> logout </a>
      </li>
</ul>

    
   </div>

   
   </div>
</nav>
    




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>