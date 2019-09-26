<!DOCTYPE html>
<html>
<head>
	<style>
		#Main
 	{
 		background-image: url(https://wallpapercave.com/w/wp4038528.jpg);
 	}
 	</style>
	

</head>

<body>
	<div id="Main">

	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<H4>Give ID Number to be deleted</H4>
		ID: <input type="text" name="user">
		<input type="submit" name="submit" value="submit">
</form>
</div>		
<?php
error_reporting(0);
require('DBconnection.php');
 if(isset($_POST['submit'])){
				if($_SERVER["REQUEST_METHOD"] == "POST") {
               
				$IDNumber= $_POST['IDNumber'];
                $sql="DELETE FROM ownerinformation WHERE IDNumber='$IDNumber'"; 
                 Delete1($sql);
                 echo "successfull";
				 $dbname->close();
				 
				}
			}

?>

</body>
</html>