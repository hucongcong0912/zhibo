<?php
namespace App\Http\Controllers;

use App\Test;// Test model
use Illuminate\Http\Request; 

class TestController extends Controller{

    public function index(){


        $data = Test::paginate(2);

        return view('test.index', ['data'=>$data]);
    }


    public function create(){
        return view('test.create');
    }

    public function save(Request $request){
        $data = $request->all();
       print_r($data );
    }
}