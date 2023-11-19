<?php
include 'adminheader.php';
$n=$_SESSION['name'];
$con = new mysqli("localhost","root","","aluminidatabase");
$sql="SELECT * FROM `admin` WHERE `Fullname`='$n';";
$result=mysqli_query($con,$sql);
$row=$result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style2.css'>
    <script src='main.js'></script>
    <style>
        .file{
            display: inline-flex;
        }
    </style>
</head>
<body >
<h1 style="margin-left:340px;">Profile :</h1>
<div class="file" style="margin-left:350px">
    
    <table class="profileitem">
        <tr><td><b>Name :</b></td><td><?php   echo $row["Fullname"]?></td></tr>
        <tr><td><b>Designation :</b></td><td><?php   echo $row["Designation"]; ?></td></tr>
        <tr> <td><b>Position :</b></td><td><?php   echo $row["Position"];?></td></tr>
        <tr><td><b>MailId :</b></td><td><?php   echo $row["Email"];?></td></tr>
    </table>
    <img src="faculty\<?=$row['image'] ?>" alt="" width="300px" height="300px" style="margin-left:90px">
</div>
<!-- <div style="margin-top:50px;"><a href="update.php" style="font-size:20px;text-decoration:underline;font-weight:bold;margin-left:450px;margin-top:40px;color:red;">**Update Profile</a></div> -->


</body>
</html>