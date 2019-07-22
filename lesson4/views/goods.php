<?php /** @var array $goods */ ?>
<h1 class="product-header">Товары</h1>
<div class="flex-catalog">
<?php foreach ($goods as $good): /** App\models\Good $good */
    echo <<<php


    <article class="product-flex">
        <a href="#" class="product">
             <img class="catalogunit"  src="$good->address">
            <h4 class="unit-name pink">$good->name </h4>
            <a href="?c=good&a=good&id=$good->id"> Подробнее </a>
        </a>
    </article>


php;
endforeach; ?>
</div>
