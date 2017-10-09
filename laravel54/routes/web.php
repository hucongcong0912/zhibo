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


route::get('index/echo1','IndexController@echo1');




// 测试
route::get('test/index', 'TestController@index');
route::any('test/create', 'TestController@create');
route::any('test/save', 'TestController@save');
//测试


route::get('login/login_do','LoginController@login_do');  //登录
route::get('login/login_add','LoginController@login_add');//注册
route::get('login/login_out','LoginController@login_out');//退出


