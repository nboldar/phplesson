<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 20.09.2018
 * Time: 19:05
 */

namespace app\controllers;
use app\base\App;
use app\models\repositories\ProductRepository;

class SingleController extends Controller
{
    public function actionIndex()
    {
        $id = App::call()->request->getParams('id');
        var_dump($id);
        $product = (new ProductRepository())->getOne($id);
        $this->useLayout=false;

        echo $this->render('single_page', ['product' => $product]);
    }
}