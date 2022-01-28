<!DOCTYPE html>
<html>

<head>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
    a:hover {
        cursor: pointer;
        background-color: yellow;
    }
    .form-control{
        width:300px;
        margin: 20px auto;
    }
    </style>
</head>

<body>
    
        <div class="MainBody">
    <input class="form-control" type="text" id="search" placeholder="Search" />
    <a href="admin.php">Back to Dashboard</a>
    <br>
    <br />
    <div id="display"></div>
    </div>
    </div>
</body>
</html>
<script>
    function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
}

$(document).ready(function() {
    $("#search").keyup(function() {
        var name = $('#search').val();
        if (name == "") {
            $("#display").html("");
        }
        else {
            $.ajax({
                type: "POST",
                url: "ajax.php",
                data: {
                    search: name
                },
                success: function(html) {

                    $("#display").html(html).show();
                }
            });
        }
    });
});
</script>
