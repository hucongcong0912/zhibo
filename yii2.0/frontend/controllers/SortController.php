<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
<<<<<<< HEAD

/**
 * Site controller
=======
/**
 * 分类
>>>>>>> 2aab17c526dc2d4982580c8538efc9b59df963f1
 */
class SortController extends Controller
{
    /**
<<<<<<< HEAD
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('user');
    }

=======
     * 展示
     */
    public function actionIndex()
    {
        // 查询数据库
        $query= Yii::$app->db->createCommand("SELECT * FROM `type`")->queryAll();
        if ($query) {
            $return = $query;
        }else{
            $return = false;
        }
        $arr = array('return'=>$return);
        $result = json_encode($arr);
        echo $result;die;
        
        //动态执行回调函数
        if (isset($_GET['callback'])) {
            $callback = $_GET['callback'];
            echo $callback."($result)";
        }else{
            echo "访问错误";
        }
    }
    /**
     * 添加
     */
    public function actionAdd(){
        // // 引入公共方法
        // $public = new PublicForm;
        // // 接收请求数据
        // $arr = $public->IS_SERVER();
        // // 判断登录数据
        // if (isset($arr['user_name']) && isset($arr['pwd'])) {
        //     $user_name = $arr['user_name'];
        //     $pwd = md5($arr['pwd']);
        //     // 查询数据库
        //     $query= Yii::$app->db->createCommand("SELECT * FROM `user` WHERE (`user_name`='$user_name' && pwd='$pwd')")->queryOne();
        //     if ($query) {
        //         $return = true;
        //     }else{
        //         $return = false;
        //     }
        // }else{
        //     $return = 'error';
        // }
        // $arr = array('return'=>$return);
        // $result = json_encode($arr);
        // //动态执行回调函数
        // if (isset($_GET['callback'])) {
        //     $callback =`llback'];
        //     echo $callback."($result)";
        // }else{
        //     echo "访问错误";
        // }
    }
    /**
     * 修改
     */
    public function actionSave(){
        // 引入公共方法
        // $public = new PublicForm;
        // // 接收请求数据
        // $arr = $public->IS_SERVER();
        // // 判断登录数据
        // if (isset($arr['user_name']) && isset($arr['pwd'])) {
        //     $user_name = $arr['user_name'];
        //     $pwd = md5($arr['pwd']);
        //     // 查询数据库
        //     $query= Yii::$app->db->createCommand("SELECT * FROM `user` WHERE (`user_name`='$user_name' && pwd='$pwd')")->queryOne();
        //     if ($query) {
        //         $return = true;
        //     }else{
        //         $return = false;
        //     }
        // }else{
        //     $return = 'error';
        // }
        // $arr = array('return'=>$return);
        // $result = json_encode($arr);
        // //动态执行回调函数
        // $callback = $_GET['callback'];
        // echo $callback."($result)";
    }
    /**
     * 删除
     */
    public function actionDel(){
        // 引入公共方法
        // $public = new PublicForm;
        // // 接收请求数据
        // $arr = $public->IS_SERVER();
        // // 判断登录数据
        // if (isset($arr['user_name']) && isset($arr['pwd'])) {
        //     $user_name = $arr['user_name'];
        //     $pwd = md5($arr['pwd']);
        //     // 查询数据库
        //     $query= Yii::$app->db->createCommand("SELECT * FROM `user` WHERE (`user_name`='$user_name' && pwd='$pwd')")->queryOne();
        //     if ($query) {
        //         $return = true;
        //     }else{
        //         $return = false;
        //     }
        // }else{
        //     $return = 'error';
        // }
        // $arr = array('return'=>$return);
        // $result = json_encode($arr);
        // //动态执行回调函数
        // $callback = $_GET['callback'];
        // echo $callback."($result)";
    }
>>>>>>> 2aab17c526dc2d4982580c8538efc9b59df963f1
}
