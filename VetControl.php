<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
// Create connection
$dbname= new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($dbname->connect_error) {
    die("Connection failed: " . $dbname->connect_error);
} 


$id=$_POST['id'];
$enthusiasm=$_POST['enthusiasm'];
$walk=$_POST['walk'];
$vaccine=$_POST['vaccine'];
$exercise=$_POST['exercise'];
$trained=$_POST['trained'];
$interacts=$_POST['interacts'];
$healthy=$_POST['healthy'];
$active=$_POST['active'];

$sql = "INSERT INTO inspection(dogIDNumber, enthusiasm, walk, vaccine
, exercise, trained, interacts, healthy, active)
VALUES ('$id', '$enthusiasm', '$walk', '$vaccine', '$exercise','$trained','$interacts','$healthy','$active')";

  if ($dbname->query($sql) === TRUE) {
    header('Location:VetOfficer.php');
 
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
}


 $q2 = @mysql_query("SELECT enthusiasm,walk,vaccine,exercise,trained,interacts,healthy,active FROM inspection
");

if ($row = mysql_fetch_array($q2) == TRUE) {
  $results = $row[1];
  
  echo "$results<br>";
}

?>