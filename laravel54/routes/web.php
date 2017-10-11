<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('index/index');
// });
// 路由的配置
route::get('/','IndexController@index'); // 我的订阅
route::get('index/index','IndexController@index'); // 我的订阅
route::get('index/all','IndexController@all');// 全部直播
route::get('user','IndexController@user'); // 个人中心

// 个人中心
route::get('user','UserController@index'); 			// 我的信息
route::get('user/grade','UserController@grade'); 	// 等级成长
route::get('user/collect_history','UserController@collect_history'); 	// 订阅与历史
route::get('user/news','UserController@news'); 		// 我的消息
route::get('user/nobility','UserController@nobility'); // 我的贵族
route::get('user/title','UserController@title'); 	// 我的头衔
route::get('user/asset','UserController@asset'); 	// 我的财产
route::get('user/convert','UserController@convert'); 	// CDKey兑换
route::get('user/approve','UserController@approve'); 	// 虎牙认证


// 测试
route::get('test/index', 'TestController@index');
route::any('test/create', 'TestController@create');
route::any('test/save', 'TestController@save');
//测试


route::any('login/login_do','LoginController@login_do');  //登录
route::any('login/login_add','LoginController@login_add');//注册
route::any('login/login_out','LoginController@login_out');//退出


route::any('type/type','typeController@type');//左侧菜单
