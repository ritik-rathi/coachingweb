<?php include 'navbar.php' ?>
<html>
    <body>
    <?php
if(isset($_POST["submit"])){
   
$link =mysqli_connect("localhost","root","",'test');

$name = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['password'];

$dub ="SELECT * from `user` where email ='$e' ";
$check =mysqli_query($link,$dub);


if(mysqli_num_rows($check)>0)
{
    echo '<div class="alert alert-danger"> Email already registered</div>';
}
else {
    if($_POST['password']!=$_POST['password2'])
    { 
        echo '<div class="alert alert-danger"> password not matched</div>';
    }
    else{
    $add = "INSERT INTO `user` (name, email, password) VALUES ('$name','$e','$p')";
if (mysqli_query($link,$add)) {
    header("Location: /php/login.php");
    exit;
 
}
 else {
echo "Error: " . $add . "<br>" . $link->error;
}
}
}
}

?>


<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body">

<h3>Register here!</h3>


            <form  method="post"  >
                <div class="form-group">
                    <label for="text">Name</label>
                    <input type="text" class="form-control" name="name"required>
                </div>
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control"  name="email">
            </div>
            <div class="form-group">
                <label for="password" class="password">password</label>
                <input type="password" class="form-control" name="password" required>
            </div>

            <div class="form-group">
                <label for="password" class="password" >confirm_password</label>
                <input type="password"  name="password2" class="form-control">
            </div>
            <button name="submit" type="submit" class="btn btn-dark btn-block">Register</button>
            </form>
        </div>
    </div>
</div>



</body>
</html>