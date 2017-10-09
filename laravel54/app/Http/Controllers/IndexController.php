<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
	public function index()
	{	
		// print_r($_SESSION);die;
        return view('index/index');
	}

    //全部直播
	public function all(){
        return view('index/all');
    }
}