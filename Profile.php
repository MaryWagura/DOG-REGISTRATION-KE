<?php
session_start();
include_once 'Connect.php';
$OwnerID = $_SESSION["OwnerID"];
//echo $OwnerID;

$result = mysqli_query($dbname, "SELECT * FROM ownerinformation where IDNumber = '$IDNumber'") ;

$rows= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>User Profile</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<style>
body{
    background: -webkit-linear-gradient(left, #5F0763, #E17EE6);
}
.emp-profile{
    padding: 5%;
    margin-right: 5%;
    margin-left: 5%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}

.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 30%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}

.profile-img{
    margin-left: 120%;
}



		table{
			border-collapse: collapse;
             width: 100%;
            margin-bottom: 30px;
		}
		th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

	</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">DOG REGISTRATION KE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" 
        </li>
        <li><a href="Logout.php">Log out</a></li>
       
      </ul>
      
    </div>s
  </div>
</nav>	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                       <div class="profile-img">
                        <center> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwh5sBr0LLuApAZNKH_nvYphVcqYXs_J_6V3uv_7KBGibyyQu-&s" alt=""/>
                          
                        </div>
                        <h3 style="  color: #0062cc;">Welcome User!</h3>
                    </div>
                   
                  
                </div>
              
                      
                    
                        <div class="tab-content profile-tab" id="myTabContent">
                           
                                            <div style="overflow-x:auto;">
                                                <table>
      
        <tr>
             <th>ID Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Location</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_array($result))
            {
                ?>

                <tr>
                    <td><?php echo $rows['IDNumber'];?></td>
                    <td><?php echo $rows['FirstName'];?></td>
                    <td><?php echo $rows['LastName'];?></td>
                    <td><?php echo $rows['PhoneNumber'];?></td>
                    <td><?php echo $rows['Email'];?></td>
                    <td><?php echo $rows['Age'];?></td>
                    <td><?php echo $rows['Gender'];?></td>
                    <td><?php echo $rows['Location'];?></td>
                </tr>
                <?php

            }
                ?>
            
        
    </table>
         
                                      
                                </div>

                            </div>
                             <input type="submit" class="profile-edit-btn"  value="Edit Profile"/>
                   
    <a href="Logout.php"><input type="submit" class="profile-edit-btn"  value="Logout"/> </a>

                    
    <a href="Payment.php"><input type="submit" class="profile-edit-btn"  value="Payment"/> </a>    
                        </div>

                    
          
   
 


</body>
</html>