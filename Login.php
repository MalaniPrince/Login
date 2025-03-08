<?php
include "Connection.php";
if(isset($_POST['Login']))
{
   $em = $_POST['email'];
   $ps = $_POST['password'];
   $query = " insert into Login ( Email, Password ) values ('$em','$ps')";
   $data = mysqli_query($conn,$query);
   if($data)
   {
       echo "Data instered";
   }
   else{
       echo "failed";
   }
}
?>