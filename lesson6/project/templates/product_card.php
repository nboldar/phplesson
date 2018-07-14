<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 15:39
 */
?>
<div class="product-card" data-id="<?=$id?>">
    <img class="product-card-main-img" data-id="<?=$id?>" src="<?=$img_url?>" alt="<?=$title?>">
    <div class="product-card-darken" data-id="<?=$id?>"></div>
    <a class="product-card-icon cart-add" href="javascript://">
        <img src="img/icon/add_to_cart.png" alt="Add to cart" title="Add to cart" data-id="<?=$id?>">
    </a>
    <a class="product-card-icon cart-continue" href="/single.php?id=<?=$id?>">
        <img src="img/icon/add_to_cart_copy.png" alt="Buy again" title="Go to product page">
    </a>
    <a class="product-card-icon cart-favourite" href="javascript://">
        <img src="img/icon/add_to_cart_copy2.png" alt="Add to favourite" title="Add to favourite">
    </a>
    <span class="product-name"><?=$title?></span>
    <p class="product-price">$<?=$price?></p>
</div>
