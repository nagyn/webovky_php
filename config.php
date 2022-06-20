<?php

/* Attempt to connect to MySQL database */
$link = new mysqli("localhost","root","","monstr");
// Check connection
if(mysqli_connect_errno()){
echo "Failed to connect to MySQL:" . mysqli_connect_error();
exit();
}

?>