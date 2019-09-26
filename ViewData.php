<!DOCTYPE html>
<html>
<head>
	<title>View Data</title>
	<style type="text/css">
		table
		{
			border-collapse: collapse;
			width: 100%;
			color: black;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th
		{
			background-color: maroon;
			color: white;
		}
		tr:nth-child(even)
		{
			background-color: maroon;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>IDNumber</th>
			<th>PhoneNumber</th>
			<th>Email</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Location</th>
			<th>NumberofDogs</th>
      </tr>
      <?php
      error_reporting(0);
     include 'DBconnection.php';
      if ($dbname->connect_error) {
      	die("Connection failed:".$dbname-> connect_error);
      }
      $sql ="SELECT FirstName, LastName, IDNumber, PhoneNumber, Email, Age, Gender, Location, NumberofDogs";
      $result= $dbname-> query($sql);
      if ($result->num_rows>0) {
      	while ($row=$result-> fetch_assoc()) {
      		echo "<tr><td>".$row[FirstName] . "</td><td>".$row[LastName] ."</td><td>". $row[IDNumber] ."</td><td>".$row[PhoneNumber] ."</td><td>".$row[Email] ."</td><td>".$row[Age] ."</td><td>".$row[Gender] ."</td><td>".$row[Location] ."</td><td>".$row[NumberofDogs] ."</td><td></tr>";
      	}
      	echo "</table";
      }
      else {
      	echo "0 result found";
      }
      $dbname->close();
      ?>
	</table>

</body>
</html>