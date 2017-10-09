<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;

use frontend\models\Log; // 用户详情表
/**
 * 用户
 */
class UserController extends Controller
{
    
    // 用户申请成为主播列表
    public function actionLists(){

        $p = isset ( $_GET['p'] ) ? $_GET['p'] : 1; //页数
        $search_key = isset ( $_GET['search_key'] ) ? $_GET['search_key'] : ''; // 搜索关键字
        $size = 5; // 每页条数
        $start = ( $p -1 ) * $size; // 偏移量

         $data = Yii::$app->db->createCommand("SELECT user_id,nickname,sex,is_anchor FROM log where nickname like '%$search_key%' limit ".$start.','.$size  )->queryAll();
      
        if($data){
            $res = [
                'status' =>1000,
                'msg' =>'ok',
                'data'=>$data
            ];

        }else{
            $res = [
                'status' =>1001,
                'msg' =>'没有数据',
                'data'=>''
            ];
        }


        $callback = $_GET['callback'];
        echo $callback , '(' , json_encode($res) ,')';
        
    }



    //审核  user_id用户id
    public function actionSuccess($user_id){
         $res = Yii::$app->db->createCommand("UPDATE log SET is_anchor = 1 WHERE user_id = $user_id")->execute();
        if($res){
            $data['status'] =1;
            $data['msg'] ='修改成功';
           
        }else{
             $data['status'] =0;
            $data['msg'] ='修改失败';
           
        }

         $callback = $_GET['callback'];
        echo $callback , '(' , json_encode($data) ,')';

    }

    
}
