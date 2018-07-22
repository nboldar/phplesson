<form action="" method="post">



    <p>Номер заказа: <?=$products[0]['order_id']?></p>
    <p>Cумма заказа:<?=$products[0]['order_sum']?> </p>
    <p>Статус заказа:<?=$products[0]['order_status']?></p>
    <table>
        <tr>
            <td>id</td>
            <td>title</td>

            <td>Quantity</td>
            <td>price</td>
            <td>size</td>
            <td>category</td>
            <td>color</td>
            <td>brand</td>
            <td>gender</td>
        </tr>


        <?php foreach ($products as $product): ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[title]" type="text"  value="<?=$product['title']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[quantity]" type="text"  value="<?=$product['quantity']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[price]" type="number" value="<?=$product['price']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[size]" type="text" value="<?=$product['size']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[category]" type="text" value="<?=$product['category']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[color]" type="text" value="<?=$product['color']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[brend]" type="text" value="<?=$product['brend']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[gender]" type="text" value="<?=$product['gender']?>"></td>
                <td><input style="width: 50px" name="<?=$product['id']?>[check_product]" type="checkbox"  value="true"></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <input type="submit" name="delete" value="delete">
    <input type="submit" name="add" value="подтвердить заказ">
    <input type="submit" name="change" value="change">


