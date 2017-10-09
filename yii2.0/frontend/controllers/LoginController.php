<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Login;

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
    	
    	$user_name = $_GET['name'];
    	$pwd = $_GET['pwd'];

    	$data = Login::find()->where(['name'=>$user_name,'pwd'=>$pwd])->asArray()->one();

        
    	if($data){
    		$res = ['status'=>'1000', 'msg'=>'登录成功'];
    	}else{
    		$res = ['status'=>'1001', 'msg'=>'账号或密码错误'];
    	}

    	$callback = $_GET['callback'];

        echo $callback ,'(', json_encode($res) , ')';

    }

}
