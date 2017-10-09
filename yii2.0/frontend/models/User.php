<?php
namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;




/**
 * ContactForm is the model behind the contact form.
 */
class User extends ActiveRecord
{

public static function tableName()
{
	
	return 'user';
}



}