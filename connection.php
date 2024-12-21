<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="javatpoint";
$con=mysqli_connect("localhost","root","","javatpoint");
if(mysqli_connect_errno())
{
echo"failed to connect with MySQL:".mysqli_connect_error();
}
?>