
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      .cont{
        width:800px;
        margin: 20px auto;
        padding: 40px;
        background-color: #c5fab9;
        border-radius: 40px;
      }
    </style>
</head>
<body>

    <form class="form" action="uploadProcess.php" method="post" enctype="multipart/form-data">
    <div class="cont">
    <h1>Upload problem</h1>
    <br>
    <table>
          <tr>
            <td>Problem category :</td>
            <td><input type="text" name="category" id="category" required ></td>
          </tr>
          <tr>
            <td>Problem Title :</td>
            <td><input type="text" name="title" id="title" required> </td>
          </tr>
          <tr>
            <td>Type/Paste your problem here :</td>
            <td><input type="text" name="problem" id="problem"></td>
          </tr>
          <tr>
            <td>Phone :</td>
            <td><input type="tel" name="phone" id="phone" required></td>
          </tr>

          <tr>
            <td>Buddy Points :</td>
            <td><input type="number" name="price" id="price" required></td>
          </tr>
          <tr>
    
          <tr>
                <td></td>
                <td>
                    <input class="btn btn-primary mt-5" type="submit" name="upload">
                </td>
          </tr>
        </table>
    </fieldset>
    </form>
</body>
</html>