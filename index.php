<?php

if(isset($_COOKIE['do']))
{
    $name='do';
    $content=$_COOKIE['do']+1;
    $expiry=time()+(60*60*24*7);
    setcookie($name,$content,$expiry);
    
    
    
}
else{
    $name='do';
$content=1;
$expiry=time()+(60*60*24*7);
setcookie($name,$content,$expiry);
}
include 'navbar.php'; ?>


    

<html>
<body>

<form action="" method="post">
email: <input type="email" name="email"><br>
password: <input type="password" name="password"><br>
<input type="dome">
</form>

<?php

$link =mysqli_connect("localhost","root","",'test');

if(mysqli_connect_error())
{
    echo "you are not connected to db";
}
else {
    echo "you are connected";
}
echo date("h-i-s");


$query = "SELECT * FROM `user`";
if($result=mysqli_query($link,$query)){
    $row=mysqli_fetch_array($result);
    if($row['password']=='12346'){
    echo "your mail".$row['email']."ypur psw".$row['password'];
    }
    else 
    {
        echo "incorrect psw";
    }
}

else{
    echo "something is wrong";
}

?>
</body>
</html>
