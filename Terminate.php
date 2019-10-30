<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dogregistrationke";
$dbname= new mysqli($servername, $username, $password,$dbname);

 $result=$dbname->query("SELECT * FROM ownerinformation") or die ("Couldn't connect".mysqli_error());
 $row= mysqli_fetch_array($result);
 ?>

 <div class="container">
   <?php 
    if (isset($_POST['submit'])) {
      $key=$_POST['KeyToDelete'];
   
   #to check if the record exists
      $check=$dbname->query("select * from ownerinformation where IDNumber='$key'") or die("the record does not exist").mysqli_error();
      if (mysqli_num_rows($check)>0) 
      {
         $querydelete=$dbname->query("DELETE from ownerinformation where IDNumber='$key'") or die("NOT DELETED!").mysql_error();?>
        <div class="alert alert-success">
          <p>Record Deleted successfully!</p>
        </div>
       
     <?php  
     header('Location:Terminate.php');
      }
      else 
      { ?>
        <div class="alert alert-warning">
        <p>Record does not exist!</p>
        </div>
        <?php
      }
    }
  ?>
  <table class="table table-condensed table bordered">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>ID Number</th>
      <th>Phone Number</th>
      <th>Email</th>
      <th>Age</th>
      <th>Gender</th>
      <th>Location</th>
    </tr>
    <?php
    $sr=1;
    while ($row=mysqli_fetch_array($result)) {
      ?>
     <tr>
     <form action="" method="post" role="form">
     <td><?php echo $sr;?></td>
      <td><?php echo $row['FirstName'];?></td>
       <td><?php echo $row['LastName'];?></td>
        <td><?php echo $row['IDNumber'];?></td>
         <td><?php echo $row['PhoneNumber'];?></td>
          <td><?php echo $row['Email'];?></td>
           <td><?php echo $row['Age'];?></td>
            <td><?php echo $row['Gender'];?></td>
             <td><?php echo $row['Location'];?></td>
             <td>
               <input type="checkbox" name="KeyToDelete" value="<?php echo $row['IDNumber'];?>">
             </td>
             <td>
               <input type="SUBMIT" name="submit" class="btn btn-info">
             </td>

     </form>
     </tr>
     <?php $sr++;}
    
    ?>
  </table>
</div>
</body>
</html>	
