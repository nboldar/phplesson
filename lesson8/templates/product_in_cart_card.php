<?php session_start(); ?>
<?php foreach ($products as $product): ?>

    <div class="cart-content" data-id="<?= $product['id'] ?>">
        <div class="card" data-id="<?= $product['id'] ?>">
            <img src=".<?= $product['img_url'] ?>" alt="your choice" data-id="<?= $product['id'] ?>">
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
            <form action="" method="post">
                <button type="submit" name="delProductId" value="<?= $product['id'] ?>">
                    <span class="action fa fa-times-circle"></span>
                </button>
            </form>
        </div>
    </div>

<?php endforeach; ?>
</div>
<div class="cart-shopping">
    <button class="cart-shopping-btn clear-btn">clear shopping cart</button>
    <button class="cart-shopping-btn continue-shopping-btn" onclick="location.href='product/'">continue
        shopping
    </button>
</div>

<div class="cart-form">
    <form action="order" method="post" class="shipping-address">
        <span class="shipping-address-name">shipping address</span>
        <select name="city" class="shipping-address-city shipping-address-state" required>
            <option value="Bangladesh" selected>Bangladesh</option>
            <option value="New York">New York</option>
            <option value="London">London</option>
            <option value="Moscow">Moscow</option>
            <option value="Paris">Paris</option>
        </select>
        <input type="text" name="state" class="shipping-address-state" placeholder="State">
        <input type="text" name="zip" class="shipping-address-state" placeholder="Postcode/Zip">
        <button class="cart-shopping-btn cart-shopping-btn-min" type="reset">get a quote</button>


        <span class="shipping-address-name">coupon discount</span>
        <span class="coupon">Enter your coupon code if you have one</span>

        <input type="text" class="shipping-address-state" placeholder="State">
        <button class="cart-shopping-btn cart-shopping-btn-min" type="reset">apply coupon</button>


        <span class="proceed-subtotal" name="subtotal"><?= $sum ?></span>
        <span class="proceed-grandtotal">grund total&nbsp;&nbsp;
                <span class="grand-price" name="total"><?= $sum ?></span>
            </span>
        <button class="proceed-btn" name="proceed" value="<?= $sum ?>" type="submit">proceed to checkout</button>
    </form>
</div>
