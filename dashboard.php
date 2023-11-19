<?php

include 'header.php';
$con = new mysqli("localhost","root","","aluminidatabase");
$date=date("m-");
$sql="SELECT * FROM `aluminidata` WHERE MONTH(Dob) = MONTH(NOW()) AND DAY(Dob) = DAY(NOW())";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        .events div{
            width: 340px;
            padding-left: 20px;
            
            height: 450px;
            border-radius: 5px;

        }
    
      .mySlides {
        display: none
      }
      .mySlides img {
        vertical-align: middle;
        margin-left: 250px;
      }
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
      }
      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color:black;
        font-weight: bold;
        font-size: 28px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
      }
      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }
      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }
      /* Caption text */
      .text {
        color: black;
        font-size: 20px;
        padding: 8px 12px;
        /* position: absolute; */
        bottom: 8px;
        width: 100%;
        text-align: center;
      }
      /* Number text (1/3 etc) */
      .numbertext {
        color:black;
        font-size: 19px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }
      /* The dots/bullets/indicators */
      .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #999999;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
      }
      .active,
      .dot:hover {
        background-color: #111111;
      }
      /* Fading animation */
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      @-webkit-keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      @keyframes fade {
        from {
          opacity: .4
        }
        to {
          opacity: 1
        }
      }
      /* On smaller screens, decrease text size */
      @media only screen and (max-width: 300px) {
        .prev,
        .next,
        .text {
          font-size: 11px
        }
    }
    .notice a{
        text-decoration: none;

    }
    .notice{
        padding-right: 10px;
    }


        </style>
</head>
<body>
  
        
        <div class="events" style="margin-left:190px;">
            <div style="background-color:#F8F0E5;"><h2><img src="icons\icons8-events-64.png" alt="" style="vertical-align:middle;" width="50px" >  Upcoming Events</h2>
            <p>Graduation Day on 26/11/2023</p>
            </div>
            <div style="background-color: aliceblue;margin-left:50px;" class="notice"><h2><img src="icons\icons8-news-64.png" alt="" style="vertical-align:middle;" width="40px" >  Notice</h2>
           <p> <a href="https://vcenggw.ac.in/images/banner/Engineering%20Education%20Excellence%20Award%202022-1.png">Our College has received Engineering Education Excellence Award 2022</a></p><hr >
           <p> <a href="https://vcenggw.ac.in/images/ranking%20360.jpg">Our College has ranked AA+ among the India's Best Engineering Colleges category in Careers 360 Magazine for the year 2022</a></p>   
        </div>
            <div style="margin-left:80px;background-color:bisque;width:400px;overflow-y:scroll;"><h2><img src="icons\icons8-birthday-64.png" alt="" style="vertical-align:middle;" width="50px" >  Birthday corner</h2>
            <?php while ($row=$result->fetch_assoc()) {
  if (date('m-d', strtotime($row['Dob'])) == date('m-d')) { ?> <p><b>Happy Birthday <?php echo $row['Firstname']." ".$row['Lastname'].",".$row['Department'];} ?><img src="icons\icons8-birthday-64 (1).png" alt="" width="30px" style="vertical-align:middle;"></b></p><?php } ?>
              </div>         
        </div>
        <!-- <div class="events" style="margin-top:150px;">
            <div><img src="alum1.png" alt="" width="400px" height="400px"></div>
        </div> -->
        <div class="slideshow-container" style="margin-top:170px;">
        <h2><center>ALUMNI INTERACTIONS </center></h2>

        <div class="mySlides fade">
        <img src="alum3.png" style="width:50%;" height="300px">
        <div class="text"><h4>Alumni Name:Assoiciation inauguration
        </h4><p><b>Webinar on Topic:</b> Ms.N.Dharani(2016 Passed out Alumni),Senior Software Developer, TCS Chennai</p><p><b>DATE:</b> 10.08.19</p><p><b>NO of Participants:</b> 350 II,III,IV CSE
       </p></div>
      </div>
      <div class="mySlides fade">
        <img src="alum1.png" style="width:50%;" height="300px">
        <div class="text"><h4>Alumni Name:Poorani 2011 to 2015 batchDatabase/Platform Engineer, SUNTRUST ATLANTA,GEORGIA

        </h4><p><b>Webinar on Topic:</b> The art of knowing yourself</p><p><b>DATE:</b> 30.4.2020</p><p><b>NO of Participants:</b> 174 II,III ,IV YEAR</p></div>
      </div>
      <div class="mySlides fade">
        <img src="alum2.jpg" style="width:50%;" height="300px">
        <div class="text"><h4>Alumni Name:Ashwini john & sukrishna BATCH 2014-2018
        </h4><p><b>Webinar on Topic:</b> Motivational talk on carrier & resume building</p><p><b>DATE:</b> 24.04.2020</p><p><b>NO of Participants:</b> 182 II,III ,IV YEAR</p></div>
     </div>
      
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if(n > slides.length) {
          slideIndex = 1
        }
        if(n < 1) {
          slideIndex = slides.length
        }
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for(i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
      }
    </script>

</div>
</body>
</html>