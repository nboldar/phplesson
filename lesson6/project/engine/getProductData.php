<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 14.07.2018
 * Time: 15:50
 */
require_once CONFIG_DIR . "db.php";

function renderProductCards($myRequest){
    $data=queryAll("SELECT * FROM products WHERE $myRequest");
   foreach ($data as $key=>$val){
       render('product_card',[
          'id'=>$val['id'],
           'title'=>$val['brend'].'  '.$val['title'],
           'price'=>$val['price'],
           'img_url'=>$val['img_url'],

       ]);
    }
}
