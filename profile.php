<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style2.css'>
    <script src='main.js'></script>
</head>
<body >
<?php

include 'header.php';

?>
<div class="file">
    <h1 ><img src="icons\man.png" style="vertical-align:middle;" width="40px" height="40px">Profile:</h1>
    <table class="profileitem">
        <tr><td><b>Name :</b></td><td><?php   echo $row["Firstname"]." ".$row["Lastname"];?></td><td><b>DateOfBirth :</b></td><td><?php   echo $row["Dob"];?></td></tr>
        <tr><td><b>MailId :</b></td><td><?php   echo $row["Email"];?></td> <td><b>Department :</b></td><td><?php   echo $row["Department"];?></td></tr>
        <tr><td><b>Batch :</b></td><td><?php   echo $row["Batch"];?></td> <td><b>Current Status :</b></td><td><?php   echo $row["Status"];?></td></tr>
        <tr><td><b>Company/College Name :</b></td><td><?php   echo $row["clgorcmpname"];?></td> <td><b>Current Location :</b></td><td><?php   echo $row["Currentlocation"];?></td></tr>
        <tr><td><b>Mobile Number :</b></td><td><?php   echo $row["Mobileno"];?></td> <td><b>Address :</b></td><td><?php   echo $row["Address"];?></td></tr>
    </table>
    
</div>
<div style="margin-top:50px;"><a href="update.php" style="font-size:20px;text-decoration:underline;font-weight:bold;margin-left:450px;margin-top:40px;color:red;">**Update Profile</a></div>


</body>
</html>