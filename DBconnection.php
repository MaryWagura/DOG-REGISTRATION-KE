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
$FirstName=$_POST['firstname'];
$LastName=$_POST ['Lastname'];
$IDNumber=$_POST ['idnumber'];
$PhoneNumber=$_POST['phonenumber'];
$Email=$_POST ['email'];
$Age=$_POST['Age'];
$Gender=$_POST ['gender'];
$Location=$_POST ['Location'];
$NumberOfDogs=$_POST['NumberOfDogs'];


    $sql = "INSERT INTO ownerinformation(FirstName, LastName, IDNumber, PhoneNumber, Email, Age, Gender, Location,NumberOfDogs)
VALUES ('$FirstName', '$LastName', '$IDNumber', '$PhoneNumber','$Email','$Age','$Gender','$Location','$NumberOfDogs')";

        if ($dbname->query($sql) === TRUE) {
    echo "Records entered successfully";
 header('Location:Registerme.php');
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
}
$insert= $dbname->query("SELECT FirstName, LastName, IDNumber, PhoneNumber, Email, Age, Gender, Location,NumberOfDogs FROM ownerinformation");

 function Delete1($sql){
		$dbname=Connection();
		if ($dbname->query($sql) === TRUE) {
      echo "Record deleted successfully";
     } else {
       echo "Error deleting record: " . $dbname->error;
    } 
}

?>
