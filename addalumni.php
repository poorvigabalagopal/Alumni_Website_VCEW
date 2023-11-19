<?php
include 'adminheader.php';
if(isset($_POST['Submit'])){ //check if form was submitted
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email=$_POST['email'];
$dob=$_POST['date'];
$batch=$_POST['batch'];
$dept=$_POST['dept'];
$status=$_POST['status'];
$clgname=$_POST['clgname'];
$location=$_POST['location'];
$mobileno=$_POST['mobileno'];
$Address=$_POST['Address'];
$Password=$_POST['Password'];
$con = new mysqli("localhost","root","","aluminidatabase");
$sql="INSERT INTO `aluminidata`(`Firstname`, `Lastname`, `Dob`, `Email`, `Batch`, `Department`, `Status`, `clgorcmpname`, `Currentlocation`, `Mobileno`, `Address`, `Password`) VALUES ('$Fname','$Lname','$dob','$email','$batch','$dept','$status','$clgname','$location','$mobileno','$Address','$Password');";
$result=mysqli_query($con,$sql);

if($result){
    header('Location:addalumni.php');
}
else{
    echo '<script>alert("Enter Correct Details");</script>';
}
  } 


?>
<html>
    <head>
        <title>HomePage</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

        <link href="style1.css" rel="stylesheet">
        

    </head>
    <body >
      
       <div style='width:700px; font-size:20px;margin-left:280px;font-family:serif;'>
        <form method="post" action=""> 
       <h2>Add Alumni Details :)</h2><table style='border-spacing:15px;font-size:20px;color:rgb(23, 33, 111);font-family: serif;padding:5px;'><tr><td><b>Firstname:</b></td><td><input type="text" name="Fname" required></td><td><b>Lastname:</b></td><td><input type="text" name="Lname" required></td></tr>
       <tr><td><b>Date-Of-Birth:</b></td><td> <input type="date" name="date" required></td><td><b>Batch:</b></td><td><select name="batch" style="width: 170px;height: 25px;"><option>Select</option><option value="2020-2024">2020-2024</option></select required></td></tr>
       <tr><td><b>Department:</b></td><td><select name="dept" style="width: 170px;height: 25px;"><option>Select</option><option value="BE.CSE">BE.CSE</option><option value="BE.ECE">BE.ECE</option><option value="BTech.IT">BTech.IT</option><option value="BE.EEE">BE.EEE</option><option value="Bio.tech">Bio.tech</option><option value="BME">BME</option></select></td><td><b>Current Status:</b></td><td><select name="status" style="width: 170px;height: 25px;"><option>Select</option><option value="Working">Working</option><option value="Student">Student</option><option value="Entrepreneur">Entrepreneur</option><option value="Others">Others</option></select></td></tr>
       <tr><td><b>Company/CollegeName:</b></td><td> <input type="text" name="clgname" required></td><td><b>Company/College Location:</b></td><td><input type="text" name="location" required></td></tr>
       <tr><td><b>Mobile Number:</b></td><td><input type="number" name="mobileno" required></td><td><b>Email:</b></td><td><input type="email" name="email" required></td></tr>
       <tr><td><b>Address:</b></td><td><textarea name="Address" required></textarea></td><td><b>Password:</b></td><td><input type="text" name="Password" required></td></tr><table>
       <button  style='cursor:pointer;background-color:rgb(10, 10, 110);color:white;width:80px;height:40px;border-radius:2px;' name="Submit" onclick="alert('Successfully Submitted')">Submit</button>
    </form>   
    </div>
       







      </body></html>