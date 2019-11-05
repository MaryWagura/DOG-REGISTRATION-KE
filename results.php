<!DOCTYPE html>
<html lang="en">
<head>
  <title>Results View</title>
  <style>
  	  body{
        margin: 0px;
        border: 0px;
    }
    #header
    {
        width: 100%;
        height: 170px;
        background:black;
        color: white;
    }
    #nav
    {
    	 color: white;
        width: 300px;
        height: 400px;
        background:#710f9a;
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
        height: 80px;
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
       <center> <img style="border-radius: 70%;
        			width: 100px;"src="index.png" alt="AdminLogo" id="AdminLogo"> <br><h3>THE DOG REGISTRATION KE</h3><p >Veterinary Officer</p></center>
    </div>
    <div id="nav">
   <ul>
        <li><a href="VetOfficer.php">Home</a></li>
        
      </ul><br>
      <div class="input-group">
        
          
          
      </div>
    </div>
</div>
</div>
</div>
    <div class="col-sm-9">
      <form action="ResultControl.php" method="post">
<p>Enter the dog's ID number below to get results</p>
 Dog ID: <input type="text" name="id" required>
 <p></p>
 <input  type="submit" value="Submit">

 
    </div>
  




</body>
</html>
