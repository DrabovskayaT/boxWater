<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Введите количество бутылок</title>
    <meta name="description" content="count">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>

</head>
<body>
    <form method="post" id="ajax_form" action="">
        <input type="text" name="count" placeholder="count" /><br>
        <input type="button" id="btn" value="Отправить" />
    </form>
    <br>
    <div id="result_form"></div>
</body>
</html>