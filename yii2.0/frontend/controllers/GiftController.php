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
    //展示
    public function actionShow(){

      $model = Yii::$app->db->createCommand("select * from  gift")->queryAll();
      $cd['data'] = $model;
       //print_r($cd);die;
      $cd=json_encode($cd);
       // print_r($cd); 
       $callback=$_GET['callback'];
       if(!empty($callback)){
          echo $callback.'('.$cd.')';
       }

    }
    //添加
   public function actionAdds(){
       $datas=$_GET;
       $gift_ctime=date('Y-m-d H:i:s');
       $gift_name=$_GET['gift_name'];
       $price=$_GET['price'];
       // print_r($data);die;
     $cd=Yii::$app->db->createCommand()->insert('gift', ['gift_name' => $gift_name,'gift_ctime' =>$gift_ctime,'price'=>$price])->execute();
     // print_r($cd);die;
   }
//查询
 public function actionLikes(){

    $data=$_GET;
    $gift_name=$_GET['gift_name'];
    // print_r($data);die;
     $model = Yii::$app->db->createCommand("select * from  gift where gift_name  like '%$gift_name%'")->queryAll();
       //print_r($model);die;
      $cd['data'] = $model;
       //print_r($cd);die;
      $cd=json_encode($cd);
       // print_r($cd); 
       $callback=$_GET['callback'];
       if(!empty($callback)){
          echo $callback.'('.$cd.')';
       }
   }

     public function actionDels(){
      $data=$_GET;
      $gift_id=$_GET['gift_id'];
      $cd=Yii::$app->db->createCommand("delete  from gift where gift_id='$gift_id'")->execute();  
      $model = Yii::$app->db->createCommand("select * from  gift")->queryAll();
      $cds['data'] = $model;
      $cds=json_encode($cds);
       $callback=$_GET['callback'];
       if(!empty($callback)){
          echo $callback.'('.$cds.')';
       }  
    }





}
