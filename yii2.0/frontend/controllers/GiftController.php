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

      $model = Yii::$app->db->createCommand("select * from  gift")->queryAll();
      $cd['data'] = $model;

      $cd=json_encode($cd);
       // print_r($cd); die;

       
       $callback=$_GET['callback'];
       if(!empty($callback)){
          echo $callback.'('.$cd.')';
       }

    }

}
