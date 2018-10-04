
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Errors</title>
    <style>
        body {
            background: #eeeeee;
        }
        .main {
            background: #fff;
            width: 70%;
            margin: 0 auto;
            padding: 15px;
        }
    </style>
</head>
<body>
<div class="main">
    <h1>Произошла ошибка</h1>
    <p><b>Error code: </b> <?= $errno;?></p>
    <p><b>Error text: </b> <?= $errstr;?></p>
    <p><b>Error file: </b> <?= $errfile;?></p>
    <p><b>Error line: </b> <?= $errline;?></p>
</div>
</body>
</html>