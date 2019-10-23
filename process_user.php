<?php

 session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$FirstName=$_POST['FirstName'];
$IDNumber=$_POST ['IDNumber'];

   $dbname= new mysqli($servername, $username, $password,$dbname);
 
 $result=$dbname->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 if ($row['FirstName']==$FirstName && $row['IDNumber']==$IDNumber) {
 	$_SESSION["FirstName"] = $row['FirstName'];
 	$_SESSION["IDNumber"] = $row['IDNumber'];
 	$_SESSION["OwnerID"] = $row['IDNumber'];
    echo "Login Successful Welcome ".$row['FirstName'] ;
    header("Refresh: 1; url=OwnerLogin.php");
   
 }else
 {
 	echo "Failed";
 }


?>
