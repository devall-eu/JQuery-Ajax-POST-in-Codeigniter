<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<div id="container">
    <h1>Welcome to CodeIgniter!</h1>
    <button>Click to post ID:77</button>
    <hr>
    <div id="body">

    </div>
</div>

<script type="text/javascript">
    $("button").click(function () {
        $.ajax({
            type: 'POST',
            url: 'welcome/ajaxRequestPost',
            data: {
                id: 77
            },
            dataType: "json",
            success: function (data) {
                console.log(data);
                $('#body').append('The posted ID is: ' + data + '<br>');
            }
        });
    });
</script>

</body>
</html>