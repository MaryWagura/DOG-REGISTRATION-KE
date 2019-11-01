<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$conn= new mysqli($servername, $username, $password,$dbname);
$OwnerID = $_SESSION["OwnerID"];
$IDNumber = $_SESSION["IDNumber"];
$FirstName=$_SESSION["FirstName"];

echo $FirstName;
echo $IDNumber;



 $result=$conn->query("SELECT * FROM ownerinformation ") or die("Failed to query DB".mysqli_error($conn));

  $rows= mysqli_fetch_array($result);

  
	?>
<!DOCTYPE html>
<html>
<head>
	<title>WELCOME TO DOG REGISTRATION KE</title>
	<style type="text/css">
		table{
			border:2px solid red;
			background-color: #FFC;
		}
		th
		{
			border-bottom:5px solid #0000;
		}
		td
		{
			border-bottom: 2px solid #666;
		}
	</style>
</head>
<body>
	<p><h3>WELCOME TO DOG REGISTRATION KE</h3></p>
    <p>Display data</p>
    <table align="center" border="1px" style="width: 600px; line-height:40px;">
    	<tr>
    		
    		<th colspan="8"><h2>Customer Details</h2></th>
    	</tr>
    	   <tr>
    		 
    		<th>First Name</th>
    		<th>Last Name</th>
            <th>IDNumber</th>
    		<th>Phone Number</th>
    		<th>Email</th>
    		<th>Age</th>
    		<th>Gender</th>
    		<th>Location</th>
    	   </tr>
    		<?php
    		while($rows=mysqli_fetch_array($result))
    		{ 
                if($rows['IDNumber']==$IDNumber){
    			?>

    			<tr>
    				
    				<td><?php echo $rows['FirstName'];?></td>
    				<td><?php echo $rows['LastName'];?></td>
                    <td><?php echo $rows['IDNumber'];?></td>
    				<td><?php echo $rows['PhoneNumber'];?></td>
    				<td><?php echo $rows['Email'];?></td>
    				<td><?php echo $rows['Age'];?></td>
    				<td><?php echo $rows['Gender'];?></td>
    				<td><?php echo $rows['Location'];?></td>
    			</tr>

    			<?php
                }
    		}
    			?>
    		
    	
    </table>
    <a href="Payment.php">
        <div class="form-group">    
    <input type="Payment" class="btn btn-primary" name="Payment" value="Payment">
        </a>
          </div>

   <a href="Logout.php">
		<div class="form-group">	
	<input type="Logout" class="btn btn-primary" name="Logout" value="Logout">
		</a>
		  </div>

</body>
</html>