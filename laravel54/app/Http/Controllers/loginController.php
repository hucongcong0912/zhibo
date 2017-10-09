<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	
	public function login_do(){
		$username = isset($_GET['username'])?$_GET['username']:'';
        $password = isset($_GET['password'])?$_GET['password']:'';
        if(!$username || !$password){
            $arr= array('msg'=>1002,'data'=>'账号密码为空');
        }else{
            $data = DB::table('user')->where(['user_name'=>$username,'pwd'=>md5($password)])->get();
            if($data){
            	
            	$_SESSION['user']=$data;
            	$arr= array('msg'=>1000,'data'=>$data);

            }else{
            	echo "<script>alert('密码错误')</script>";
            }
        }
        return view('index/index');
	}
	public function login_add(){
		$username = isset($_GET['username'])?$_GET['username']:'';
        $password = isset($_GET['password'])?$_GET['password']:'';
        // echo $username.$password;die;
        if(!$username || !$password){
            $arr = array('msg'=>1002,'data'=>'账号密码为空');
        }else{
        	$data = DB::select('select * FROM `user` where `user_name` = "'.$username.'"');          
            // print_r($data);die;
            if($data){
            	$arr = array('msg'=>1004,'data'=>'账号已存在');
            }else{      	
            	$arr = array('user_name'=>$username,'pwd'=>md5($password));
            	$data =	DB::table('user')->insert($arr);
            	if($data){
            		$arr = array('msg'=>1000,'data'=>$data);
            	}else{
            		$arr = array('msg'=>1005,'data'=>'账号添加失败');
            	}
            }
        }
        // print_r($arr);die;
        return view('index/index',['user'=>$arr]);
	}
	public function login_out(){
		$_SESSION['user']=[];
		return view('index/index');
	}
}