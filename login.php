<?php
include 'navbar.php' 
?>

<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body">
         
<h3>login here!</h3>
            <form method='post' action=''>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" name="email" class="form-control" >
            </div>
          
             <div class="form-group">
                <label for="password" class="password">password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <button  name ="submit" type="submit" class="btn btn-dark btn-block">Login</button>
            </form>
        </div>
    </div>
</div>


<?php

if(isset($_POST["submit"])){
   
    $link =mysqli_connect("localhost","root","",'test');
    
    
    $e = $_POST['email'];
    $p = $_POST['password'];
    $_SESSION['email']=$e;
    $dub ="SELECT * from `user` where email ='$e' ";
   
    $check =mysqli_query($link,$dub);
    
    
    if(mysqli_num_rows($check)>0)
    {
        if(mysqli_num_rows(mysqli_query($link,"select *from user where email='$e' AND password='$p' "))>0)
        {
            echo '<script> alert("logged in") </script>';
             header('Location:navbaruser.php');
    }
    else {
        echo '<script> alert("incorrect psw") </script>';
    }
}
else

echo '<script> alert("not registered") </script>';
    }
    


?>