<?php session_start();?>
<?php foreach ($products as $product): ?>


    <div class="product-card" data-id="<?= $product['id'] ?>">
        <img class="product-card-main-img" data-id="<?= $product['id'] ?>" src="<?= $product['img_url'] ?>"
             alt="<?= $product['title'] ?>">
        <div class="product-card-darken" data-id="<?= $product['id'] ?>"></div>
        <form action="product" method="post">
            <button name="productId" type="submit" value="<?= $product['id'] ?>">
                <a class="product-card-icon cart-add" href="javascript://">
                    <img src="img/icon/add_to_cart.png" alt="Add to cart" title="Add to cart"
                         data-id="<?= $product['id'] ?>">
                </a>
            </button>
        </form>
        <a class="product-card-icon cart-continue" href="/single.php?id=<?= $product['id'] ?>">
            <img src="img/icon/add_to_cart_copy.png" alt="Buy again" title="Go to product page">
        </a>
        <a class="product-card-icon cart-favourite" href="javascript://">
            <img src="img/icon/add_to_cart_copy2.png" alt="Add to favourite" title="Add to favourite">
        </a>
        <span class="product-name"><?= $product['title'] ?></span>
        <p class="product-price">$<?= $product['price'] ?></p>
    </div>
<?php endforeach; ?>