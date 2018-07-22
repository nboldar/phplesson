<form action="" method="post">
<table>
    <tr>
        <td>id</td>
        <td>TITLE</td>
        <td>img_url</td>
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
        <td><input style="width: 50px" name="<?=$product['id']?>[img_url]" type="text" value="<?=$product['img_url']?>"></td>
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
    <td><input style="width: 50px" name="title" type="text"  value=""></td>
    <td><input style="width: 50px" name="img_url" type="text" value=""></td>
    <td><input style="width: 50px" name="price" type="number" value=""></td>
    <td><input style="width: 50px" name="size" type="text" value=""></td>
    <td><input style="width: 50px" name="category" type="text" value=""></td>
    <td><input style="width: 50px" name="color" type="text" value=""></td>
    <td><input style="width: 50px" name="brend" type="text" value=""></td>
    <td><input style="width: 50px" name="gender" type="text" value=""></td>
    <input type="submit" name="delete" value="delete">
    <input type="submit" name="add" value="add">
    <input type="submit" name="change" value="change">


</form>