<?php
session_start();
$n=$_POST['mail'];
$p=$_POST['pswd'];


$con = new mysqli("localhost","root","","aluminidatabase");
$sql="SELECT * FROM `aluminidata` WHERE `Email`='$n';";
$result=mysqli_query($con,$sql);
if($row=$result->fetch_assoc()){
   if($row['Password']==$p){
      
   header('Location:dashboard.php');
   $_SESSION["name"]=$row['Firstname'];
   }
   else{
      echo '<script> alert("incorrect password"); window.location.href="alumini.html"</script>';
   }
}   



?>
