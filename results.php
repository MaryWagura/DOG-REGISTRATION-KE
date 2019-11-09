<!DOCTYPE html>
<html lang="en">
<head>
  <title>Results View</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
 
        body{
        margin: 0px;
        border: 0px;
        background: #E1C3E0;
    }
    #header
    {
        width: 100%;
        height: 120px;
        background:black;
        color: white;

    }
    
    #data
    {
        height: 700px;
        color: black;
        font-size: 25px;
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
        table.striped-columns tbody td:nth-of-type(even),
table.striped-columns th:nth-of-type(even){
    background: rgb(235, 227, 209);
}
table.border {
    border-collapse: collapse;
    border-spacing: 0;
}
table.border td,
table.border th {
    border: 1px solid grey;
    padding: 3px;
}
   
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <img style="height:30% ;width: 70%;" src="Admin.jpeg" alt="AdminLogo" id="AdminLogo">
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="VetOfficer.php" class="w3-bar-item w3-button">Home</a>
    <a href="Logout.php" class="w3-bar-item w3-button">Logout</a>
   
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">LOGO</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

 
  </header>

  

  <div class="w3-container w3-text-grey" id="jeans">
     
 

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    

   

<div id="header">
       <h3>THE DOG REGISTRATION KE</h3>
    </div>
    <div class="col-sm-9">
      <form action="ResultControl.php" method="post">
<p>Enter The ID number below to get results</p>
ID Number: <input type="text" name="OwnerID" required>
 <p></p>
 <input  type="submit" value="Submit">
 
    </div>
</form>
</div>
  
</body>
</html>