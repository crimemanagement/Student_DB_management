<?php

$con=mysqli_connect("localhost","root","") or die ("Error in connection");
mysqli_select_db($con,"student_management") or die("Database not found"); 
?>
