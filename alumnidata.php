
<?php 
 include 'adminheader.php';

?>
<!DOCTYPE html>
<html>
  
  <head> 
    <style>
  .alumdata{margin-left:150px;
           margin-top:10px;}
  td{
    border: 2px solid black;
    border-collapse:collapse;
  }
  
</style></head>
<body>
<div style="display:inline-flex;" class="alumdata">
<form method="post" action="">
   <label>Batch<label><select name="Batch"><option value="2020-2024">2020-2024</option></select><label>Department<label><select name="dept" style="width: 170px;height: 25px;"><option>Select</option><option value="BE.CSE">BE.CSE</option><option value="BE.ECE">BE.ECE</option><option value="BTech.IT">BTech.IT</option><option value="BE.EEE">BE.EEE</option><option value="Bio.tech">Bio.tech</option><option value="BME">BME</option></select>
   <button name="Submit">Submit</button></form>
</div>
<div class="alumdata">
<table style=" border-collapse:collapse;">
<tr><td>Student name</td><td>Batch</td><td>Department</td><td>Status</td><td>College or Company Name</td><td>Mobile Number</td><td>Email</td></tr>    
<?php if(isset($_POST['Submit'])){ //check if form was submitted
    $batch=$_POST['Batch'];
    $dept=$_POST['dept'];
    // $n=$_SESSION['name'];
    $con = new mysqli("localhost","root","","aluminidatabase");
    $sql="SELECT * FROM `aluminidata` WHERE `Batch`='$batch' and `Department`='$dept';";
    $result=mysqli_query($con,$sql);while($row=$result->fetch_assoc()){ ?><tr><td> <?php echo $row['Firstname']." ".$row['Lastname']; ?></td><td> <?php echo $row['Batch']; ?></td><td> <?php echo $row['Department']; ?></td><td> <?php echo $row['Status']; ?></td><td> <?php echo $row['clgorcmpname']; ?></td><td> <?php echo $row['Mobileno']; ?></td><td> <?php echo $row['Email']; ?></td></tr><?php } }?></table>
    
</div>
</body>      
</html>