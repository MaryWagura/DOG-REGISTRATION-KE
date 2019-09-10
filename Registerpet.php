<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="Registerpet.css">
	<div id="Main">
</head>
<body>
	<font color="White">
	<center><h1>Registration Form</h1></center>
	<div class="Register">
		<form method="post" id="Register" action="">
			<h2>Input your dog's details</h2>
			 <div class="form-group">
		    <label for="firstname"><b>Name</label><br></b>
		    <input type="text" class="form-control" name="name" placeholder="Input the dog's Name" required><br><br><br>	   
		  </div>
		   
		   <div class="form-group">
		    <label for="firstname"><b>Age</label><br></b>
		    <input type="text" class="form-control" name="Age" placeholder="Input the dog's age" required><br><br><br>	   
		  </div>
		   <div class="form-group">
		    <label for="firstname"><b>Color</label><br></b>
		    <input type="text" class="form-control" name="color" placeholder="Input the dog's colour" required><br><br><br>   
		  </div>
		  <div class="form-group">
		    <label for="gender"><b>Gender</label><br></b>
		    <select class="form-control" name="gender" required><br><br>
		    	<option value="M"><b>Male</option><br><br></b>
		    	<option value="F"><b>Female</option><br><br></b>
		    </select><br><br>
		  </div>
		  <div class="form-group">
		    <label for="Breed"><b>Breed</label><br></b>
		    <select class="form-control" name="Breed" required>
		    	<option value="M"><b>German Shepherd</option></b>
		    	<option value="F"><b>Nepolian Mastiff</option></b>
		    	<option value="F"><b>Rottweiler</option></b>
		    	<option value="F"><b>The Rhodesian Ridgeback</option></b>
		    	<option value="F"><b>Labrador Retriever</option></b>
		    	<option value="F"><b>The English Springer Spaniel</option></b>
		    	<option value="F"><b>The Doberman Pinscher</option></b>
		    	<option value="F"><b>Great Dane</option></b>
		    	<option value="F"><b>Basenji</option></b>
		    	<option value="F"><b>Saint Bernard</option></b>
		    	<option value="F"><b>Golden Retriever</option></b>
		    	<option value="F"><b>Siberian Husky</option></b>
		    	<option value="F"><b>American Maltese</option></b>
		    	<option value="F"><b>Chihuahua</option></b>
		    	<option value="F"><b>Pomerian</option></b>
		    	<option value="F"><b>Maltese</option></b>
		    	<option value="F"><b>Australian Terrier</option></b>
		    	<option value="F"><b>Japanese Spitz</option></b>
		    </select><br><br>
		  </div>
		  <div class="form-group">
		    <label for="Vaccine"><b>Tick the vaccine administered to your dog according to your dog's vaccine book.</label><br>
		    	<input type="radio" name="Rabbis" value="Rabbis"><b> Rabbis</b><br>
		    	<input type="radio" name="Parvovirus" value="Parvovirus"><b>Parvovirus</b><br>
		    	<input type="radio" name="Dewormer" value="Dewormer"><b> Dewormer<br></b><br>
		    </div>
		   <div class="form-group">
		    <label for="Image"><b>Upload the dog's image</label><br>
		    <input type="file" name="image" required><br><br><br>	

		  </div>
		   
		   <div class="form-group">		    
		    <input type="submit" class="btn btn-primary" name="submitReg" value="SUBMIT">
		  </div>		  

</form>
	</div>
</div>




</body>
<?php 
	
	session_start();
	session_destroy();
	header("location:Registerpet.php");
	?>
</html>