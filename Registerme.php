<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="Registerme.css">
	<div id="Main">

</head>
<body>
	<font color="White">
	<center><h1>Registration Form</h1></center></font>
	<div class="Register">
		<form method="post" id="Register" action="">
			<h2>Input your details</h2>
			 <div class="form-group">
		    <label for="firstname"><b>First Name</label><br><br></b>
		    <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>Last Name</label><br><br></b>
		    <input type="text" class="form-control" name="firstname" placeholder="Enter Last Name" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>ID Number</label><br><br></b>
		    <input type="text" class="form-control" name="firstname" placeholder="Enter your ID number" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>Phone Number</label><br><br></b>
		    <input type="text" class="form-control" name="phonenumber" placeholder="+254" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="email"><b>Email</label><br><br></b>
		    <input type="email" class="form-control" name="email" placeholder="example@domain.com" required><br><br>   
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>Age</label><br><br></b>
		    <input type="text" class="form-control" name="Age" placeholder="Enter Age" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="gender"><b>Gender</label><br><br></b>
		    <select class="form-control" name="gender" required>
		    	<option value="M">Male</option>
		    	<option value="F">Female</option>
		    </select><br><br>
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>Location</label><br><br></b>
		    <input type="text" class="form-control" name="Location" placeholder="Input city residence" required><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>Number of dogs</label><br><br></b>
		    <input type="text" class="form-control" name="Numberofdogs" placeholder="0" required><br><br>	   
		  </div>
		  <a href="Registerpet.php">
		   <div class="form-group">		    
		    <input type="submit" class="btn btn-primary" name="submitReg" value="SUBMIT">
		</a>
		  </div>
		  </div>		  

</form>
	</div>


</body>
<?php 
	
	session_start();
	session_destroy();
	header("location:Registerpet.php");
	?>
</html>