<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
            type="text/javascript">
    </script>
</head>
<body>
    <div id="file_content"></div>
    <script>
        var time = 0;
        setInterval(function() {
            $.ajax({
                type: "POST",
                data: {time : time},
                url: "fileupdate.php",
                success: function (data) {
                    var result = $.parseJSON(data)
                    if (result.content) {
                        $('#file_content').append('<br>' + result.content);
                    }
                    time = result.time;
                }
            });
        }, 1000);
    </script>
</body>
