<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * 首页
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}
