<h1>Товар</h1>

<?php
echo <<<php
<img src="{$good->address}">
<h2>$good->name</h2>
<p>Стоимость: $good->price</p>
<a href="?c=good&&a=delete&id=$good->id">Удалить</a>
php;
?>

