<?php

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    $data = $_POST;
    if (isset($_POST['delete'])) {
        $arr = [];
        foreach ($data as $key => $val) {
            if (isset($data[$key]['check_product'])) {
                array_push($arr, $key);
            }
        }
        $allId=implode(",", $arr);
        execute("delete from products where id in ({$allId})");
    }
    if (isset($_POST['add'])) {
        $title = $_POST['title'];
        $img_url = $_POST['img_url'];
        $price = $_POST['price'];
        $size = $_POST['size'];
        $category = $_POST['category'];
        $color = $_POST['color'];
        $brend = $_POST['brend'];
        $gender = $_POST['gender'];
        execute("insert into products ( title, img_url, price, size, category, color, brend, gender) values
                ('{$title}','{$img_url}','{$price}','{$size}','{$category}','{$color}','{$brend}','{$gender}')");
    }
    if (isset($_POST['change'])) {
        foreach ($data as $key => $val) {
            if (isset($data[$key]['check_product'])) {
                execute(
                    "update products set  
                          title='{$data[$key]['title']}',
                          img_url='{$data[$key]['img_url']}',
                          price='{$data[$key]['price']}',
                          size='{$data[$key]['size']}',
                          category='{$data[$key]['category']}',
                          color='{$data[$key]['color']}',
                          brend='{$data[$key]['brend']}',
                          gender='{$data[$key]['gender']}'
                           where id='{$key}'
                          ");
            }
        }
    }

}
$products = queryAll("select * from products ");
echo renderTemplate('admin', ['products' => $products]);
