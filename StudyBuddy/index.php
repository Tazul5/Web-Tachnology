<?php
if(session_status()>=0){
    if(isset($_SESSION["username"])){
        if($_SESSION["username"]=="Admin"){
            echo "Redirecting";
            header("refresh: 0.5; url = admin.php");
        }
        else{
            echo "Redirecting";
            header("refresh: 0.5; url = user.php");
        }
        
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            background:url("Assets/home-bg.svg");
        }
        a{
            color: white;
        }
        a:hover{
            color: grey;
            text-decoration:none;
        }
        .carousel-item{
        background-color: #c5fab9;
        padding: 50px 40px;
        border-radius: 20px;
        }
        .btn{
            background-image: linear-gradient(0deg,#7bf181,#9df786);
        }
        .carousel p{
            width: 80%;
        }
        .square-box{
            width: 230px;
            height: 230px;
            background-color: #c5fab9;
            text-align: center;
            border-radius: 20px;
            margin-bottom: 20px;
        }
        .s-img{
            height: 80px;
        }
        .s-icon{
            width: 24px;
            height: 24px;
        }
        .para{
            max-width: 580px;
            padding: 20px;
        }
        footer{
            font-family: sans-serif;
            font-weight: 400;
            background-color: black;
        }
        ul{
            list-style: none;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">StuddyBuddy</a>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item active  mr-5">
                <a href="signup.php" class="my-sm-0" type="submit">Sign Up</a>
            </li>
            <li class="nav-item">
                <a href="login.php" class=" my-1 my-sm-0" type="submit">Login</a>
            </li>

          </ul>
        </div>
    </nav>
    <div class="container">

            <div id="carouselExampleControls" class="carousel slide my-5" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <p>Helping students succeed extends beyond enhancing their academic experience. We aim to make an impact in multiple areas of their lives and in their communities. our mission is to help every student achieve their best, in school and beyond.</p>
                        
                        <a class="btn text-white">Join Now!</a>
                    </div>
                    <div class="col-md-5">
                        <img src="Assets/1.svg" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <p>StudyBuddy is a platform where Students can find 24/7 homework help and online tutoring. On the other hand, other users (instructors) who are expert in such area can help Students with their knowledge.</p>
           
                        <a class="btn text-white">Join Now!</a>
                    </div>
                    <div class="col-md-5">
                        <img src="Assets/2.svg"" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <p>StudyBuddy is simplifying tedious tasks for Students by providing this service in a user-friendly environment</p>
           
                        <a class="btn text-white">Join Now!</a>
                    </div>
                    <div class="col-md-5">
                        <img src="Assets/3.svg"" class="d-block w-100" alt="...">
                    </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>


          <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center mt-5 mb-5">
            <div class="square-box d-flex justify-content-center align-items-center">
                <div>
                    <img class="img-fluid s-img" src="Assets/book.png" alt="">
                    <h3 class="mt-2">1500+ Topics</h3>
                    <p>Learn anything!</p>
                </div>
            </div>
            <div class="square-box d-flex flex-column justify-content-center align-items-center">
                <div>
                    <img class="img-fluid s-img" src="Assets/Students.png" alt="">
                    <h3 class="mt-2">1800+ Students</h3>
                    <p>Learn anything!</p>
                </div>
            </div>
            <div class="square-box d-flex flex-column justify-content-center align-items-center">
                <div>
                    <img class="img-fluid s-img" src="Assets/Test.png" alt="">
                    <h3 class="mt-2">1300+ Questions</h3>
                    <p>Learn anything!</p>
                </div>
            </div>
            <div class="square-box d-flex flex-column justify-content-center align-items-center">
                <div>
                    <img class="img-fluid s-img" src="Assets/Student.png" alt="">
                    <h3 class="mt-2">300+ Contributors</h3>
                    <p>Learn anything!</p>
                </div>
            </div>
        </div>

        
        
        <!-- <p style="width:50%;margin:500px auto;">StudyBuddy is to help students in their most difficult times during studies. It will be a platform, where users can upload problems in photo, text, or pdf format. while other users who are expert in this such area can help other users with their knowledge.</p> -->
    </div>

    <footer class="text-light">
        <div class="d-flex flex-column flex-md-row justify-content-around pt-4">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="481" height="194" id="gmap_canvas" src="https://maps.google.com/maps?q=chittagong&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com">getasearch</a><br><style>.mapouter{position:relative;text-align:right;height:194px;width:481px;}</style><a href="https://www.embedgooglemap.net">adding google map to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:194px;width:481px;}</style></div></div>
            <ul>
                <li><h5>Courses</h5></li>
                <li>Lorem</li>
                <li>Ipsum</li>
                <li>Dolor</li>
                <li>Lorem</li>
            </ul>
            <ul>
                <li><h5>Terms</h5></li>
                <li>Lorem</li>
                <li>Ipsum</li>
                <li>Dolor</li>
                <li>Lorem</li>
            </ul>
            <ul>
                <li><h5>Usefull Links</h5></li>
                <li>Lorem</li>
                <li>Ipsum</li>
                <li>Dolor</li>
                <li>Lorem</li>
            </ul>
        </div>
        <p class="text-center pt-4 m-0">&copy;Copyright, Study Buddy, 2021.</p>

    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>