<?php
include 'header.php';
$n=$_SESSION["name"];
$con = new mysqli("localhost","root","","aluminidatabase");
$sql="SELECT * FROM `aluminidata` WHERE `Firstname`='$n';";
$result=mysqli_query($con,$sql);
$row=$result->fetch_assoc();
if(isset($_POST['Submit'])){
  $n=$_SESSION["name"];
  $con1 = new mysqli("localhost","root","","aluminidatabase");
  $sql="SELECT * FROM `aluminidata` WHERE `Firstname`='$n';";
  $result=mysqli_query($con1,$sql);
  $row=$result->fetch_assoc();
  $name=$row["Firstname"].$row['Lastname'];
  $batch=$row["Batch"];
  $dept=$row["Department"];
  $mobno=$row['Mobileno'];
  $query=$_POST['query'];
  
  $sql1="INSERT INTO `query`(`Fullname`, `Batch`, `dept`, `Mobileno`, `query`) VALUES ('$name','$batch','$dept','$mobno','$query')";
  $result1=mysqli_query($con1,$sql1);
  

  if($result1){
    header('Location:query.php');
   
  }else{
    echo 'error';
  }}
?>
<Doctype html>
    <html>
    <head>
        <title>HomePage</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">

        <link href="style1.css" rel="stylesheet">
        


    </head>
    <body  >
      <h4 style='font-size:20px;margin-left:350px;color:red;'>**Here You can Raise a query like Issue of Marksheet ,Feedback and Other queries** </h4>
       <form method="post" action=""> 
       <div style='font-size:20px;margin-left:450px;width: 550px;padding: 50px;margin-top:-30px;'>
       <h1>Raise a query:</h1><table style='border-spacing:15px;font-size:20px;color:rgb(23, 33, 111);font-family: serif;padding:15px;'><tr><td><b>Fullname:</b></td><td><?php echo $row["Firstname"]." ".$row["Lastname"] ?></td></tr>
       <tr><td><b>Batch:</b></td><td><?php echo $row["Batch"] ?></td></tr>
       <tr><td><b>Department:</b></td><td><?php echo $row["Department"] ?></td></tr>
       <tr><td><b>Query:</b></td><td><textarea name="query" required></textarea></td></tr></table>
       <button  style='cursor:pointer;background-color:rgb(10, 10, 110);color:white;width:80px;height:40px;border-radius:2px;' name="Submit" onclick="alert('Submitted Successfully')">Submit</button></form><button  style='cursor:pointer;background-color:rgb(10, 10, 110);color:white;width:80px;height:40px;border-radius:2px;margin-left:20px;'><a style='text-decoration:none;color:white;' href='dashboard.php'>Back</a></button>
       </div>
       




</form>


      </body></html>