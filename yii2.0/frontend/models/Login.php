<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;




/**
 * ContactForm is the model behind the contact form.
 */
class Login extends ActiveRecord
{

public static function tableName()
{
	
	return 'admin_user';
}



}