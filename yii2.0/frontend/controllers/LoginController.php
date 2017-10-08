<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 登陆与注册
 */
class LoginController extends Controller
{
    /**
     * 登陆
     */
    public function actionIndex()
    {
        return $this->renderPartial('login');
    }

}
