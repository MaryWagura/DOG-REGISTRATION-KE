<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$dbname= new mysqli($servername, $username, $password,$dbname);



 $result=$dbname->query("SELECT * FROM ownerinformation ") or die("Failed to query DB".mysqli_error($dbname));

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
  
      <div id="Logout">
     <a href="Logout.php">
        <div class="form-group">    
    <input type="Logout" class="btn btn-primary" name="Logout" value="Logout">
        </a>
          </div>
      </div>
    <table align="center" border="1px" style="width: 600px; line-height:40px;">
        <tr>
            
            <th colspan="8"><h2>Customer Details</h2></th>
        </tr>
        <tr>
             <th>ID Number</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Loction</th>
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


</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$dbname= new mysqli($servername, $username, $password,$dbname);



 $result=$dbname->query("SELECT * FROM petdetails ") or die("Failed to query DB".mysqli_error($dbname));

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
      </div>
    <table align="center" border="1px" style="width: 600px; line-height:40px;">
        <tr>
            
            <th colspan="8"><h2>Pet Details</h2></th>
        </tr>
        <tr>
             <th>Name</th>
            <th>Age </th>
            <th>Color</th>
            <th>Gender</th>
            <th>Breed</th>
            <th>Vaccines</th>
            <th>DogImage</th>
            <th>Owner ID</th>
            </tr>
            <?php
            while($rows=mysqli_fetch_array($result))
            {
                ?>

                <tr>
                    <td><?php echo $rows['Name'];?></td>
                    <td><?php echo $rows['Age'];?></td>
                    <td><?php echo $rows['Color'];?></td>
                    <td><?php echo $rows['Gender'];?></td>
                    <td><?php echo $rows['Breed'];?></td>
                    <td><?php echo $rows['Vaccines'];?></td>
                    <td><?php echo $rows['DogImage'];?></td>
                    <td><?php echo $rows['OwnerID'];?></td>
                </tr>
                <?php

            }
                ?>
            
        
    </table>


</body>
</html>