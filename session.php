<?php
        session_start();
         $link =mysqli_connect("localhost","root","",'test');
         $f=$_POST['email'];
         $name= "SELECT name from `user` where email='$f'";
         $get=mysqli_query($link,$name);
         $result=mysqli_fetch_assoc($get);
         $_SESSION['name']=$result['name'];
         echo $_SESSION["name"];
          
?>