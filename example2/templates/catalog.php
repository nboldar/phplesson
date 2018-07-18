<?php foreach ($products as $product):?>
    <a href="/cart.php?id=<?=$product['id']?>">
        <div class="catalog-preview">
            <div><?=$product['name']?></div>
            <div><?=$product['description']?></div>
        </div>
    </a>
<?php endforeach;?>