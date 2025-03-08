<?php
$conn = mysqli_connect(sql12.freesqldatabase.com,sql12766390,y1QunrETnQ,sql12766390);
if($conn)
{
    echo "Connection ok";
}
else{
    echo "Connection failed".mysqli_connect_error();
}
?>
