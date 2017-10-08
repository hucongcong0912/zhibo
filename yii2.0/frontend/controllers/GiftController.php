<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 用户
 */
class GiftController extends Controller
{
    /**
     * 查看
     */
    // public function actionIndex()
    // {
    //     return $this->render('user');
    // }

    public function actionShow(){

      $model = Yii::$app->db->createCommand("select * from  type")->queryAll();


    }

}
