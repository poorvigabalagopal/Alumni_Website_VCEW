<?php
include 'header.php';
$n=$_SESSION['name'];
$con = new mysqli("localhost","root","","aluminidatabase");
$sql="SELECT * FROM `aluminidata` WHERE `Firstname`='$n';";
$result=mysqli_query($con,$sql);
$row=$result->fetch_assoc();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["anyfile"]) && isset($_POST['submit'])){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["anyfile"]["name"];
        $filetype = $_FILES["anyfile"]["type"];
        $filesize = $_FILES["anyfile"]["size"];
        $batch=$row['Batch'];
        $dept=$row['Department'];
        $name=$row['Firstname']." ".$row['Lastname'];
        // Validate file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
     
        // Validate file size - 10MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
     
        // Validate type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
           
                if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "fund/" . $filename)){
 
                    $sql2="INSERT INTO `funddata`(`Name`,`Batch`, `Department`,`file`, `type`, `size`) VALUES ('$name','$batch','$dept','$filename','$filetype','$filesize')";
                    mysqli_query($con,$sql2);
 
                    echo "<script>alert('upload success');</script>";

                }else{
 
                   echo "File is not uploaded";
                }
                 
            } 
         else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["anyfile"]["error"];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div style="margin-left:290px;margin-top:-30px;width:1100px">
    <h3 style="font-size: 35px;color:black;">PAYBACK TIME: VCEW ALUMNI WORLDWIDE</h3>

    <p>Vivekanandha College Of Engineering seeks substantial contribution from its alumni by raising resources urgently needed by the Institution. The alumni can contribute for the initiatives of the Institution listed below.</p>

    <ul><li>Developing infrastructure such as construction of class rooms, laboratories, residential blocks, sitting space for teachers.</li>

    <li>Construction of smart class rooms.</li>

    <li>Providing substantial scholarship to deserving meritorious students.</li>

    <li>Increasing the research activities and establishment of innovation club.</li>
 
    <li>Contribution for development of Science and Technology park.</li>

     <li>Increase in the sports infrastructure.</li>

    <li>If you intend making a contribution to the VCEW Alumni fund, you can credit the amount to the account in the qr code</li>
    </ul>
    <div style="margin-left:50px">
    <p><b>ACCOUNT NAME:</b>VIVEKANANDHA COLLEGE OF ENGINEERING FOR WOMEN</p>
    <p><b>ACCOUNT NUMBER:</b>143109000143416</p>
    <p><b>BANK NAME:</b>CITY UNION BANK</p>
    <p><b>BRANCH NAME:</b>TIRUCHENGODE</p>
    <p><b>IFSC CODE:</b>CIUB0000143</p></div>
    </div>
    
    <div style="margin-left:50px;">  
        <form action=" " method="post" enctype="multipart/form-data" style="margin-left:240px;font-size:20px;">
        <!-- <h2><img src="icons\icons8-image-file-64.png" style="vertical-align:middle">Upload Alumni Image :</h2> -->
        <h3 style="color:green;">If You Contributed Fund money to our college,please upload a screenshot of your payment :</h3>
        <label><b>Name: </b><label><label><?php echo $row['Firstname']." ".$row['Lastname'];?></label>
        <label><b>Batch: </b></label><?php echo $row['Batch'];?></label>
        <label><b>Department: </b></label><label><?php echo $row['Department'];?></label>
        <label for="file_name">Filename:</label>
        <input type="file" name="anyfile" id="anyfile"></br></br>
        <!-- <input type="submit" name="submit" value="Upload" onclick="alert('Submitted Successfully');"> -->
        <button style="border:2px solid black;background-color:black;cursor:pointer;color:white;width:100px;border-radius:4px;margin-left:450px;margin-top:30px;padding:10px;" name="submit"><b style="font-size:20px;">Upload</b></button>
        <p style="color:red;"><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form></div>
</body>
</html>