<?php session_start(); ?>
<?php foreach ($products as $product): ?>

    <div class="cart-content" data-id="<?= $product['id'] ?>">
        <div class="card" data-id="<?= $product['id'] ?>">
            <img src="<?= $product['img_url'] ?>" alt="your choice" data-id="<?= $product['id'] ?>">
            <div class="card-description" data-id="<?= $product['id'] ?>">
                <span class="card-name"><?= $product['title'] ?></span>
                <span>Color: <span class="card-color"><?= $product['color'] ?></span></span>
                <span>Size: <span class="card-size"><?= $product['size'] ?></span></span>
            </div>
        </div>
        <div class="purchase-info" data-id="<?= $product['id'] ?>">
            <span class="unite-price">$<?= $product['price'] ?></span>
            <input class="quatity" data-id="<?= $product['id'] ?>" type="number" value="<?= $product['quantity'] ?>"
                   min="1" max="1000">
            <span class="shipping">free</span>
            <span class="card-sum">$<?= $product['price'] * $product['quantity'] ?> </span>
            <form action="./cart.php" method="post">
                <button type="submit" name="delProductId" value="<?= $product['id'] ?>">
                    <span class="action fa fa-times-circle"></span>
                </button>
            </form>
        </div>
    </div>

<?php endforeach; ?>