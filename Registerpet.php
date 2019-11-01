<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="Registerpet.css">
	<div id="Main">
</head>
<body>
	<form action="DBpet.php" method="post">
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
		  </div>
		   <div class="form-group">
		    <label for="OwnerID"><b>Input Your IDNumber</label><br></b>
		    <input type="text" class="form-control" name="OwnerID" placeholder="Input Your IDNumber" required><br><br><br>   
		  </div>
		  <div class="form-group">
		    <label for="gender"><b>Gender</label><br></b>
		    <select class="form-control" name="gender" required><br><br>
		    	<option value="M"><b>Male</option><br><br></b>
		    	<option value="F"><b>Female</option><br><br></b>
		    </select><br><br>
		  </div>
		  <div class="form-group1">
		    <label for="Breed"><b>Breed</label><br></b>
		    <select class="form-control" name="Breed" required>
		    	<option value="German Shepherd"><b>German Shepherd</option></b>
		    	<option value="Nepolian Mastiff"><b>Nepolian Mastiff</option></b>
		    	<option value="Rottweiler"><b>Rottweiler</option></b>
		    	<option value="The Rhodesian Ridgeback"><b>The Rhodesian Ridgeback</option></b>
		    	<option value="Labrador Retriever"><b>Labrador Retriever</option></b>
		    	<option value="The English Springer Spaniel"><b>The English Springer Spaniel</option></b>
		    	<option value="The Doberman Pinscher"><b>The Doberman Pinscher</option></b>
		    	<option value="Great Dane"><b>Great Dane</option></b>
		    	<option value="Basenji"><b>Basenji</option></b>
		    	<option value="Saint Bernard"><b>Saint Bernard</option></b>
		    	<option value="Golden Retriever"><b>Golden Retriever</option></b>
		    	<option value="Siberian Husky"><b>Siberian Husky</option></b>
		    	<option value="American Maltese"><b>American Maltese</option></b>
		    	<option value="Chihuahua"><b>Chihuahua</option></b>
		    	<option value="Pomerian"><b>Pomerian</option></b>
		    	<option value="Maltes"><b>Maltese</option></b>
		    	<option value="Australian Terrier"><b>Australian Terrier</option></b>
		    	<option value="Japanese Spitz"><b>Japanese Spitz</option></b>
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
		     <a href="Login.php">
		  </div>		  

</form>
	</div>
</div>
</body>
</html>