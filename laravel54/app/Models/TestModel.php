<?php
namespace app;

use Illuminate\Database\Eloquent\Model;

class Test extends Model{

    // 表名
    protected $table = 'test1';

    public function a1($query, $type)
    {
        return $query->where('type', $type);
    }

}