<?php
include 'navbaruser.php';
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 24.6%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
}

#London {background-color:skyblue; width:1000px }
#Paris {background-color:skyblue;width:1000px}
#Tokyo {background-color:skyblue;width:1000px}

</style>
</head>
<body>

<p>Click on the buttons inside the tabbed menu:</p>

<div style="padding-left:50px">
<button class="tablink" onclick="openCity('London', this, 'skyblue')" id="defaultOpen">London</button>
<button class="tablink" onclick="openCity('Paris', this, 'skyblue')">Paris</button>
<button class="tablink" onclick="openCity('Tokyo', this, 'skyblue')">Tokyo</button>

<div id="London" class="tabcontent">
<div class="container">
<?php
 $link =mysqli_connect("localhost","root","",'test');
 $dub ="SELECT * from `mathematics` ";

 $check =mysqli_query($link,$dub);


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysqli_fetch_array($check))
{
echo "<tr>";
echo "<td>" . $row['topic'] . "</td>";
echo "<td>" . $row['brief'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>
</div>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

</div>




<script>
function openCity(cityName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 





