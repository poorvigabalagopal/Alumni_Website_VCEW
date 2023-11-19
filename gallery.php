<?php
include 'header.php';
$con = new mysqli("localhost","root","","aluminidatabase");
$sql="SELECT * FROM `images`;";
$result=mysqli_query($con,$sql);
$count =1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
         
        <div class="events" style="margin-left:150px;display:block;">
        <h1>Gallery :</h1>
        <?php while($row=$result->fetch_assoc()){  ?>
           <img src="upload/<?=$row['file'] ?>" width="400px" height="300px" style="margin-left:20px;padding:10px;">       
           <?php }?>
        </div>
        
</body>
</html>