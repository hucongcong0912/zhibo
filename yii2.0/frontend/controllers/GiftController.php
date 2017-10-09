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
<<<<<<< HEAD
       //print_r($cd);die;
      $cd=json_encode($cd);
       // print_r($cd); 
       $callback=$_GET['callback'];
       if(!empty($callback)){
          echo $callback.'('.$cd.')';
       }

    }
   public function actionAdds(){
       $datas=$_GET;
       $gift_ctime=date();
       $gift_name=$_GET['gift_name'];
       $price=$_GET['price'];
       // print_r($data);die;
     $cd=Yii::$app->db->createCommand()->insert('gift', ['gift_name' => $gift_name,'gift_ctime' =>$gift_ctime,'price'=>$price])->execute();
     // print_r($cd);die;
   }

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
=======

      $cd=json_encode($cd);
       // print_r($cd); die;

       
>>>>>>> 2aab17c526dc2d4982580c8538efc9b59df963f1
       $callback=$_GET['callback'];
       if(!empty($callback)){
          echo $callback.'('.$cd.')';
       }

<<<<<<< HEAD


   }





=======
    }
>>>>>>> 2aab17c526dc2d4982580c8538efc9b59df963f1

}
