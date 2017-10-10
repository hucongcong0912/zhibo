<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class TypeController extends Controller
{
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
		$type=json_decode(json_encode($type_show_1),true);

		$data = DB::select('select * FROM `type` where `parent_id` != 0 ');
		$data=json_decode(json_encode($data),true);
		// print_r($data);die;
		return view('index/sort',['type'=>$type,'data'=>$data]);
	}


}