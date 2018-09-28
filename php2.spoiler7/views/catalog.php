<?php /** @var \app\models\entities\Product[] $products */?>
<ul>
<?php foreach ($products as $product) :?>
    <li><a href="/product/card?id=<?=$product->id?>">
            <?=$product->name?>
        </a></li>
<?endforeach;?>
</ul>