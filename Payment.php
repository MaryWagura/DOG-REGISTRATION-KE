<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$FirstName=$_SESSION['FirstName'];
$IDNumber=$_SESSION['IDNumber'];
$OwnerID=$_SESSION["OwnerID"];
$DogLicenseNumber=$_SESSION["DogLicenseNumber"];
   $conn= new mysqli($servername, $username, $password,$dbname);
    $result=$conn->query("SELECT * FROM ownerinformation where FirstName='$FirstName' and IDNumber ='$IDNumber'") or die("Failed to query DB".mysql_error());
 $row= mysqli_fetch_array($result);
 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Payment</title>
 </head>
 <body>

 	
 	
 	<form method="POST" id="mpesa-pay-form" action="pay.php">
 		<div class="form-group">
 			<label for="name"><b>Name:</label><br><br></b>
		    <input type="text" class="form-control" name="name" placeholder=<?php echo $FirstName; ?> required disabled><br><br>

		    <label for="IDNumber"><b>ID Number:</label><br><br></b>
		    <input type="text" class="form-control" name="IDNumber" placeholder=<?php echo $IDNumber; ?> required disabled><br><br>

		    <label for="DogLicenseNumber"><b>License Number:</label><br><br></b>
		    <input type="text" class="form-control" name="DogLicenseNumber" placeholder=<?php echo $DogLicenseNumber;?> required disabled><br><br>

		    <p><b>Amount to Pay: 2000</p></b>

		    <label for="phonenumber"><b>Input Your Phone Number</label><br><br></b>
		    <input type="text" class="form-control" name="phonenumber" placeholder="+254" required><br><br>	   
		</div>

 
 </body>
 </html>
