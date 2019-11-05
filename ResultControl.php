<?php
 include_once 'Connect.php';

 $id = $_POST['id'];

$result= mysqli_query($conn,"SELECT enthusiasm,walk,vaccine,exercise,trained,interacts,healthy,active FROM inspection WHERE dogIDNumber = '$id' ");

   
    $value=array();

 if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            $value[]=$row;
        }
           }
   

    foreach ($value as $data ) {

      $sum = array_sum($data) ;
    }
    
   if($sum>=30){
        echo $sum." : Pass";
    }else{
    echo $sum." : Fail";
}
?>