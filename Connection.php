<?php
$servername = "sql12.freesqldatabase.com";
$username = "sql12766390";
$password = "y1QunrETnQ";
$dbname = "sql12766390";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>
