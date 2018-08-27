<style>
.special-card {

  background-color: rgba(245, 245, 245, 1);
  opacity: .4;
}
h5{
    text-align:center;
}
</style>

<div class="row" style="padding-top:10%">
    <div class="col-md-4 mx-auto">
    <div class="card special-card" >
        <div class="card card-body">
         
<h5>hii Admin</h5>
            <form method='post' action=''>
            <div class="form-group">
                <label for="email"></label>
                <input type="email" name="email1" placeholder="abc@gmail.com" class="form-control" >
            </div>
          
             <div class="form-group">
                <label for="password" class="password"></label>
                <input type="password" class="form-control" name="password1" placeholder="********" required>
            </div>

            <button  name ="submit" type="submit" class="btn btn-dark btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
</div>


<?php

if(isset($_POST["submit"]))
{
    $em=$_POST['email1'];
    $ps=$_POST['password1'];
 
    if($em=='jain2anki@gmail.com')
    {
        if($ps=='myselfaj')
        {
            $_SESSION['email1']=$em;
        header('Location:adminprofile.php');       
        }
        else
        {
            echo 'plz check password';
        }
    }
    else{
        echo 'error in email';
    }
}

?>



    


