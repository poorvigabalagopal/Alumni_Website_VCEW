
<?php
if(isset($_POST['Submit'])){
 
 session_start();
 
 $n=$_POST['email'];
 $p=$_POST['pswd'];
 $con = new mysqli("localhost","root","","aluminidatabase");
 $sql="SELECT * FROM `admin` WHERE `Email`='$n';";
 $result=mysqli_query($con,$sql);
 if($row=$result->fetch_assoc()){
   if($row['Password']==$p){   
    header('Location:adprofile.php');
    $_SESSION["name"]=$row['Fullname'];
   
    }
   else{
      echo '<script> alert("incorrect password"); window.location.href="alumini.html"</script>';
    }
  }
   
 }
?>
<!DOCTYPE html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>
<div style="display:inline-flex;margin: 20px;margin-left: 350px;"><img src="download.png" width="120px" height="120px"/><p id="logo">
    <span style="letter-spacing:14px;font-size: 60px;font-weight: bold;">Vivekanandha</span><br> College Of Engineering For Women,Thiruchengode</p></div>
    <fieldset>
     <legend >Admin Login</legend>
    <form method="post" action="">
        <table>
            <tr>
       <td>Email id:</td><td><input type="text" name="email"></td></tr>
        <tr><td>Password:</td><td><input type="password" name="pswd"></td></tr>
                <tr><td colspan="2"><button name="Submit">Submit</button></td></tr>
    </table>

    </form>
    <p style="text-align: center;"><a style="text-decoration:underline;" href="alumni.html">Alumini login</a></p>
    </fieldset>
</body>



</html>