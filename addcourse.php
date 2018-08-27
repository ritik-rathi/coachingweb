<?php
include 'adminprofile.php';
?>
<h4 style="text-align:center; padding-top:5%; padding-down:5%;">ADD NEW COURSE</h4>

<div class="row">
    <div class="col-md-8 mx-auto">
<form  method="post">
  <div class="row">
    <div class="form-group col-md-6">
    <input type="text" name="coursename" class="form-control form-control-sm col-10-sm"  placeholder="Course Name !">
    </div>
    <div class="form-group col-md-6">
   <input type="text" name="coursefor" class="form-control form-control-sm col-10-sm" placeholder="Course for"> 
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-6">
    <input type="text" name="eligibility" class="form-control form-control-sm col-10-sm"  placeholder="Eligibility!">
    </div>
    <div class="form-group col-md-6">
      <input type="text" name="board" class="form-control form-control-sm col-10-sm" placeholder="Board"> 
    </div>
  </div>


   <div class="row">
    <div class="form-group col-md-4">
    <input type="text" name="duration" class="form-control form-control-sm col-10-sm"  placeholder="Duration">
    </div>
    <div class="form-group col-md-4">
      <input type="text" name="starting" class="form-control form-control-sm col-10-sm" placeholder="Starting"> 
    </div>
    <div class="form-group col-md-4">
      <input type="text" name="classfrom" class="form-control form-control-sm col-10-sm" placeholder="Timing for class"> 
    </div>


</div>



  <button type="submit" name="submit" style="text-align:center" class="btn btn-outline-primary">add it</button>
</form>
</div>
</div>

<?php

if(isset($_POST["submit"])){
       
$link =mysqli_connect("localhost","root","",'test');
$cname= $_POST['coursename'];
$cfor= $_POST['coursefor'];
$board= $_POST['board'];
$dur= $_POST['duration'];
$start= $_POST['starting'];
$cfrom= $_POST['classfrom'];
$eligible=$_POST['eligibility'];
$dub ="SELECT * from `courses` where cname ='$cname' ";
$check =mysqli_query($link,$dub);

if(mysqli_num_rows($check)>0)
{
    echo '<div class="alert alert-danger"> course already exist</div>';
}
else {
    $add = "INSERT INTO `courses` (cname, cfor, board, dur, cfrom, eligible) VALUES ('$cname','$cfor','$board','$dur','$cfrom','$eligible')";
if (mysqli_query($link,$add)) {
    echo '<script> alert("Done!")</script>'; 
}
 else {
//echo '<script> alert("Not Done!")</script>';

echo "Error: " . $add . "<br>" . $link->error;
}

}

}


?>