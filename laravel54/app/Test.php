<?php
namespace App;
// Test model

use Illuminate\Database\Eloquent\Model;

class Test extends Model{

    protected $table = 'test1'; // 设置表名

    public $timestamps = true; // 自动时间戳

    protected function getDateFormat(){ // 时间格式
        return time();
    }

    protected function asDateTime($value){
        return $value;
    }
}



