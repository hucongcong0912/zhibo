<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 用户
 */
class UserController extends Controller
{
    /**
     * 查看
     */
    public function actionIndex()
    {
        return $this->render('user');
    }

    // public function actionSel(){

    //    echo '00';die;


    // }

}
