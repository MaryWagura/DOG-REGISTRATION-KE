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
$Name=$_POST['name'];
$Age=$_POST ['Age'];
$Color=$_POST ['color'];
$DogIDNumber=$_POST['DogIDNumber'];
$Gender=$_POST ['gender'];
$Breed=$_POST['Breed'];
$Vaccines=$_POST ['Rabbis'];
$Vaccines=$_POST ['Parvovirus'];
$Vaccines=$_POST['Dewormer'];
$DogImage=$_POST['image'];


 
 $sql= "INSERT INTO petdetails(Name, Age, Color, DogIDNumber, Gender, Breed, Vaccines, DogImage)
VALUES ('$Name', '$Age', '$Color','$DogIDNumber', '$Gender','$Breed','$Vaccines','$DogImage')";

        if ($dbname->query($sql) === TRUE) {
    echo "Records entered successfully";
 header('Location:Registerpet.php');
} else {
    echo "Error: " . $sql . "<br>" . $dbname->error;
}
$insert= $dbname->query("SELECT Name, Age, Color,DogIDNumber, Gender, Breed, Vaccines, DogImage FROM petdetails");


?>
