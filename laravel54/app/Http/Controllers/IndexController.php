<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
	// 构造方法
	public function __construct(){
		$type = $this->type();
		session_start();
		$_SESSION['type'] = $type;
	}
	// 首页
	public function index()
	{
        return view('index/index');
	}
	//分类展示 
	public function type(){
		$type = DB::table('type')->get();
		foreach ($type as $key => $value) {
			if ($value->parent_id == 0) {
				$type_show_1[] = $value;
			}
		}
		foreach ($type as $key => $value) {
			foreach ($type_show_1 as $key_type => $value_type) {
				if ($value->parent_id == $value_type->type_id) {
					$type_show_1[$key_type]->body[]= $value;
				}
			}
		}
		return $type_show_1;
	}
    //全部直播
	public function all(){
		// 是否分类展示
		if (isset($_GET['t_id'])) {

		}
        return view('index/all');
    }
	// 个人中心
	public function user(){
		$_SESSION['user'] = 1;
		if (isset($_SESSION['user'])) {
			$user = DB::table('log')->where('user_id', $_SESSION['user'])->first();
			// echo "<pre>";
			// var_dump($user);die;
			return view('index/user',['user'=>$user]);
		}else{
			echo "请先登录";
		}
	}
	}