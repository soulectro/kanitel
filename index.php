<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
    <form id="main-form">
        <input type="text" class="crt_num">
        <button class="go">GET TERM</button>
    </form>
    
    <script>
        $(document).ready(function() {
            $(".go").click(function() {
                $.post("api.php",
                {
                    crtNum: $(".crt_num").val()
                },
                function(data, status){
                    alert("Сертификат действителен до: " + data);
                });

            })
        })
    </script>
</body>
</html>