

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <style>
        .form{
          width:800px;
          margin: 20px auto;
          padding: 40px;
          background-color: #c5fab9;
          border-radius: 40px;
        }
    </style>
</head>
<body>
    <form name="updateForm" action="update.php" method="post"  onsubmit="return validateForm()" >
    
    <div class="form">
    <div class="">
        <label for="Firstname">First Name :</label>
          <input type="text" name="firstname" id="firstname" >
        <small id ="firstErr"></small>
      </div>
      <div class="">
        <label for="lastname">Last Name :</label>
          <input type="text" name="lastname" id="lastname" >
        <small id ="lastErr"></small>
      </div>
      <div class="">
        <label for="institution">Institution :</label>
          <input type="text" name="institution" id="institution" placeholder="(optional)" >
        <!-- <small id ="nameErr"> -->
      </div>
      <input class="btn btn-primary ml-5 mt-5" type="submit" name="submit">
    </div>
    </form>

    <script src="js/userUpdateValidation.js"></script>
</body>
</html>

