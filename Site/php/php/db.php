<?php
$con = mysqli_connect("localhost:3306","andreila","ParolaBaza12","andreila_angajatori");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
echo "";
}
?>
