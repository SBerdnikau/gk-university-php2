<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <ul>
        <li><a href="?c=user&a=users">Пользователи</a></li>
        <li><a href="?a=insert">Добавить пользователя</a></li>
        <li><a href="?c=good&a=goods">Товары</a></li>
    </ul>
</div>

<div class="content container">
    <?= $content ?>
</div>
</body>
</html>
