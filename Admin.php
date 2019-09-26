<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
 <style>
 	body{
 		margin: 0px;
 		border: 0px;
 	}
 	#header
 	{
 		width: 100%;
 		height: 120px;
 		background:black;
 		color: white;
 	}
 	#sidebar
 	{
 		width: 300px;
 		height: 400px;
 		background:#d32f2f;
 		float: left;
 	}
 	#data
 	{
 		height: 700px;
 		color: black;
 		font-size: 25px;

 	}
 	#AdminLogo
 	{
 		width: 50px;
 		height: 50px;
 		border-radius: 50px;

 	}
 	ul li
 	{
         padding: 20px;
         border-bottom: 2px solid grey;
 	}
 	ul li:hover
 	{
 		background:#d32f2f;
 		color: white;
 	}
 	#Main
 	{
 		background-image: url(https://wallpapercave.com/w/wp4038528.jpg);
 	}
 </style>
</head>
<body>
	
	<div id="header">
		<img src="Admin.jpeg" alt="AdminLogo" id="AdminLogo"> <br><h3>THE DOG REGISTRATION KE</h3>
	</div>
	<div id="Main">

	<div id="sidebar">
		<ul> 
			<a href="Terminate.php"><li>Terminate License</li></a>
			<a href="ViewData.php"><li>View Data</li></a>
		</ul>
	</div>
	<div id="data"><br>
		<center><h3>Hello Admin</h3></center>
	</div>
	

</div>
</body>
</html>