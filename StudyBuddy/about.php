<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        a{
            color: white;
        }
        a:hover{
            color: grey;
            text-decoration:none;
        }
        p{
            width: 600px;
            margin: 50px auto;
            text-align: center;
        }
        h1{
            margin-top:100px;
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

            <li class="nav-item  mr-3">
                <a href="user.php" class="my-sm-0" type="submit">MyProfile</a>
            </li>
            <li class="nav-item mr-3">
                <a href="home.php" class=" my-1 my-sm-0" type="submit">Home Page</a>
            </li>
            <li class="nav-item mr-3">
                <a href="signout.php" class=" my-1 my-sm-0" type="submit">Sign Out</a>
            </li>

          </ul>
        </div>
    </nav>
    <h1 class="text-center">About Us</h1>
    <p>StudyBuddy is to help students in their most difficult times during studies. It will be a platform, where users can upload problems in photo, text, or pdf format. while other users who are expert in this such area can help other users with their knowledge.</p>
</body>
</html>