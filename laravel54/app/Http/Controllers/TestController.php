<?php
namespace App\Http\Controllers;

use App\Test;
use Illuminate\Support\Facades\Request; // Test model

class TestController extends Controller{

    public function index(){


        $data = Test::paginate(2);

        return view('test.index', ['data'=>$data]);
    }


    public function create(){
        return view('test.create');
    }

    public function save(Request $request){
        $data = $request->input()->all();
       print_r( );
    }
}