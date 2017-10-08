<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

/**
 * 用户
 */
class TypeController extends Controller
{
    /**
     * 查看
     */
    public function actionIndex()
    {
        return $this->render('user');
    }

    public function actionSel(){
       $model = Yii::$app->db->createCommand("select * from  type")->queryAll();
       // print_r($model);die;
        return $this->render("show");
    }
    public function actionAdd(){

    // $model



    }









}
