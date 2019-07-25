<?php /** @var array $goods */ ?>
<h1>Товары</h1>

<?php foreach ($goods as $good): /** App\models\Good $good */
    echo <<<php
<img class="product-img" src="{$good->address}" alt="img-{$good->name}"><br>    
<h2>$good->name </h2>
<a  href="?c=good&a=good&id=$good->id"> Подробнее </a>
<hr>
php;
endforeach; ?>
