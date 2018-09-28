<?php


namespace app\controllers;


use app\models\repositories\ProductRepository;
use app\services\Request;

class CartController extends Controller
{
    public function actionIndex()
    {
        $basket = [];
        if (!empty($_SESSION['basket'])) {
            $productsIds = array_keys($_SESSION['basket']);
            $products = (new ProductRepository())->getProductsByIds($productsIds);
            foreach ($products as $product) {
                $basket[] = [
                    'product' => $product,
                    'count' => $_SESSION['basket'][$product->id]
                ];
            }
        }
        echo $this->render("cart", ['basket' => $basket]);
    }

    public function actionAdd()
    {
        $request = new Request();
        if($request->isPost()){
            $productId = $request->getParams('id');
            $productQty =  $request->getParams('qty') ?: 0;

            if(isset($_SESSION['basket'][$productId])){
                $_SESSION['basket'][$productId] += (int) $productQty;
            }else{
                $_SESSION['basket'][$productId] = (int) $productQty;
            }

            echo json_encode(['success' => 'ok', "message" => "Товар был добавлен в корзину"]);
        }
    }
}