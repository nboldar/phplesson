<?php
/**
 * Created by PhpStorm.
 * User: nik
 * Date: 29.09.2018
 * Time: 22:10
 */

namespace app\controllers;

use app\base\App;
use app\models\entities\User;
use app\models\repositories\UserRepository;
use app\models\repositories\ProductRepository;
use app\services\TemplateRenderer;

class UserController extends Controller
{
    public function actionIndex($isPasswordRight = [])
    {
        $this->useLayout = false;
        echo $this->render('login', $isPasswordRight);
    }

    public function actionVerify()
    {
        session_start();
        $login = App::call()->request->getParams()['login'];
        $password = App::call()->request->getParams()['password'];
        $userRepository = new UserRepository();
        $user = $userRepository->getByParamName('login', $login);
        if (App::call()->auth->verify($password, $user['password'])) {
            App::call()->session->setUserId($user->id);
            header('Location:http://php2.local');
        } elseif (isset(App::call()->request->getParams()['sighin'])) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $userEntity = new User(null, $login, $hash, null);
            $userRepository->save($userEntity);
            App::call()->session->setUserId($userEntity->id);
            header('Location:http://php2.local');
        } else {
            $message = "пароль не верный";
            $this->actionIndex(['message' => $message]);
        }


    }
}