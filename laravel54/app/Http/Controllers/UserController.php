<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

/**
 * 个人中心
 */
class UserController extends Controller
{
	// 我的信息
	public function index(){
		return view('user/user');
		// echo "<pre>";
		// var_dump($_SESSION);die;
		// if (isset($_SESSION['user'])) {
			// $user = DB::table('log')->where('user_id', $_SESSION['user']->id)->first();
			// echo "<pre>";
			// var_dump($user);die;
			// return view('user/user',['user'=>$user]);
		// }else{
			// echo "请先登录";
		// }
	}

	// 等级成长
	public function grade(){
		return view('user/grade');
	}
	
	// 订阅与历史
	public function collect_history(){
		return view('user/collect_history');
	}
	
	// 我的消息
	public function news(){
		return view('user/news');
	}
	
	// 我的贵族
	public function nobility(){
		return view('user/nobility');
	}
	
	// 我的头衔
	public function title(){
		return view('user/title');
	}

	// 我的财产
	public function asset(){
		return view('user/asset');
	}
	
	// CDKey兑换
	public function convert(){
		return view('user/convert');
	}
	
	// 虎牙认证
	public function approve(){
		return view('user/approve');
	}
	
}