<?php 
session_start();
?>
<html>
<body>

<?php



if(isset($_POST["submit"])){
   if(isset)
    $link =mysqli_connect("localhost","root","",'test');
    
    
    $e = $_POST['email'];
    $p = $_POST['password'];
    
    $dub ="SELECT * from `user` where email ='$e' ";
   
    $check =mysqli_query($link,$dub);
    
    
    if(mysqli_num_rows($check)>0)
    {
        if(mysqli_num_rows(mysqli_query($link,"select *from user where email='$e' AND password='$p' "))>0)
        {echo '<script> alert("logged in") </script>';
            
             header(Location:'navbaruser.php');
    }
    else {
        echo '<script> alert("incorrect psw") </script>';
    }
}
else
echo '<script> alert("not registered") </script>';
    }
    


?>

</body>
</html>