<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;




/**
 * ContactForm is the model behind the contact form.
 */
class Log extends ActiveRecord
{


// 用户详情表
public static function tableName()
{
	
	return 'log';
}



}