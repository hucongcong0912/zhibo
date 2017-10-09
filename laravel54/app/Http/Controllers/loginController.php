<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
	
	public function login_do(){
		$username = isset($_GET['username'])?$_GET['username']:'';
        $password = isset($_GET['password'])?$_GET['password']:'';
        if(!$username || !$password){
            echo "<script>alert('账号密码为空')</script>";
        }else{
            $data = DB::select('select * FROM `user` where `user_name` = "'.$username.'" and `pwd` = "'.md5($password).'"');
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
            echo "<script>alert('账号密码为空')</script>";
        }else{
        	$data = DB::select('select * FROM `user` where `user_name` = "'.$username.'"');          
            // print_r($data);die;
            if($data){
            	echo "<script>alert('账号已存在')</script>";
            }else{      	
            	$arr = array('user_name'=>$username,'pwd'=>md5($password));
            	$data =	DB::table('user')->insert($arr);
            	if($data){
            		$arr = array('msg'=>1000,'data'=>$data);
            	}else{
            		echo "<script>alert('账号添加')</script>";
            	}
            }
        }
        // print_r($arr);die;
        return view('index/index',['user'=>$arr]);
	}
	public function login_out(){
		unset($_SESSION['user']);
		return view('index/index');
	}
}