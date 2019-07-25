<h1>Пользователь</h1>

<?php
echo <<<php
<h2>$user->login</h2>
<p>Пароль: $user->password</p>
<p>Имя: $user->fio</p>
<a href="?c=user&a=delete&id={$user->id}">Удалить</a>
php;
?>
