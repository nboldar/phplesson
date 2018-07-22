<?php foreach ($products as $product):?>
    <a href="/product/card?id=<?=$product['id']?>">
        <div class="catalog-preview">
            <div><?=$product['name']?></div>
            <div><?=$product['description']?></div>
        </div>
    </a>
<?php endforeach;?>