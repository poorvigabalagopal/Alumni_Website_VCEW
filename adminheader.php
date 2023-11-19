
<?php
session_start();
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
    
      <script src="JavaScript/jquery-1.10.2.js" type="text/javascript"></script> 
       
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="main" >


          <h1 style=" margin-left:0px;font-family: 'Dosis', sans-serif;"><img src="dd.png" alt="img" width="80px" class="logo"><span class="dd">VCEW Alumni Association<br/></span></h1><p style="margin-top:50px;margin-left:140px;"><a href="https://www.facebook.com/VCEW2001/" ><img src="facebook.svg" width="30px" height="30px"></a>
             <a href="https://twitter.com/VCEW2001" ><img src="twitter.svg" width="30px" height="30px"></a>
             <a href="https://www.instagram.com/vcew_2001/" ><img src="instagram.svg" width="30px" height="30px"></a>
             <a href="https://in.linkedin.com/school/vivekanandha-college-of-engineering-for-women/" ><img src="linkedin.svg" width="30px" height="30px"></a>
             <a href="https://www.youtube.com/@vcew2001" ><img src="youtube.svg" width="30px" height="30px"></a> 
             <a href="tel:9443734562"><img src="icons\icons8-call-50.png" width="30px" height="30px"> </a>  
             <a href="mailto:principal@vcew.ac.in"><img src="icons\icons8-mail-48.png" width="30px" height="30px"></a>
            </p>
          <h3 class="welname"><a href="adprofile.php"><img style="margin-right:10px;vertical-align: middle;" src="icons\icons8-test-account-100.png"><?php   echo $row["Fullname"];?></a></h3> 
    </div>
    <div class="menu">
    <h3><img src="icons\menu-burger.png" width="30px" height="30px" style="margin-left:20px;vertical-align:middle;"><span style="vertical-align:middle;margin-left:10px;">Menu</span></h3>
    <nav class="navbar">
    
  <ul class="navbar__menu">
  <li class="navbar__item">
      <a href="adprofile.php" class="navbar__link"><i data-feather="help-circle"></i><span>Profile</span></a>        
    </li>

    <li class="navbar__item">
      <a href="addalumni.php" class="navbar__link"><i data-feather="users"></i><span>Add Alumni Data</span></a>        
    </li> 
    <li class="navbar__item">
      <a href="alumnidata.php" class="navbar__link"><i data-feather="folder"></i><span>View alumni Data</span></a>        
    </li>
    <li class="navbar__item">
      <a href="upload.php" class="navbar__link"><i data-feather="archive"></i><span>Image Upload</span></a>        
    </li>
    <li class="navbar__item">
      <a href="logout.php" class="navbar__link"><i data-feather="archive"></i><span>Log Out</span></a>        
    </li>
   
  </ul>
</nav>
</div>

</body>
</html>



