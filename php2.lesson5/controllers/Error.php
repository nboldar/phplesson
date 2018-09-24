<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 24.09.2018
 * Time: 22:48
 */

namespace app\controllers;


class Error extends Controller
{
    public function actionError()
    {
        echo $this->render('error', []);
    }
}