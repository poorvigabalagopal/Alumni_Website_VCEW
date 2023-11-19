<?php

session_start();
$n=$_SESSION['name'];
$con = new mysqli("localhost","root","","aluminidatabase");
$sql="SELECT * FROM `aluminidata` WHERE `Firstname`='$n';";
$result=mysqli_query($con,$sql);
$row=$result->fetch_assoc();

?>