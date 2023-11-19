


<?php
include 'adminheader.php';
$con = new mysqli("localhost","root","","aluminidatabase");
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["anyfile"]) && isset($_POST['submit'])){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["anyfile"]["name"];
        $filetype = $_FILES["anyfile"]["type"];
        $filesize = $_FILES["anyfile"]["size"];
        $batch=$_POST['batch'];
        $dept=$_POST['dept'];
        $category=$_POST['category'];
        // Validate file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
     
        // Validate file size - 10MB maximum
        $maxsize = 10 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
     
        // Validate type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
           
                if(move_uploaded_file($_FILES["anyfile"]["tmp_name"], "upload/" . $filename)){
 
                    $sql="INSERT INTO `images`(`Batch`, `Department`,`file`, `type`, `size`,`Category`) VALUES ('$batch','$dept','$filename','$filetype','$filesize','$category')";
                    mysqli_query($con,$sql);
 
                    echo "<p style='margin-left:500px;color:green;'>**Your file was uploaded successfully.**</p>";

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image</title>
    <style>
        select{
            width: 150px;
            height: 25px;
        }
        label{
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data" style="margin-left:240px;font-size:20px;">
        <h2><img src="icons\icons8-image-file-64.png" style="vertical-align:middle">Upload Alumni Image :</h2>
        <label>Batch:</label><select name="batch"><option>select</option><option value="2020-2024">2020-2024</option></select>
        <label>Department:</label><select name="dept"><option>select</option><option value="BE.CSE">BE.CSE</option><option value="BE.ECE">BE.ECE</option><option value="BE.EEE">BE.EEE</option><option value="Btech.IT">Btech.IT</option><option value="BME">BME</option><option value="Bio.tech">Bio.tech</option></select>
        <label>Category</label><select name="category"><option>select</option><option value="Events">Events</option><option value="Clgfest">College Fest</option><option value="Farewell">Farewellday</option><option value="Achieversday">Achievers Day</option></select>
        <label for="file_name">Filename:</label>
        <input type="file" name="anyfile" id="anyfile"></br></br>
        <!-- <input type="submit" name="submit" value="Upload" onclick="alert('Submitted Successfully');"> -->
        <button style="border:2px solid black;background-color:black;cursor:pointer;color:white;width:100px;border-radius:4px;margin-left:450px;margin-top:50px;padding:10px;" name="submit"><b style="font-size:20px;">Upload</b></button>
        <p style="color:red;"><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
    </form>
</body>
</html>