<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\POST;




class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function page_home() {
        $datas =  DB::table('tb1')->get();
        return view('users',['datas'=>$datas]);
    }


    public function insert_1(Request $request)
    {
        $id=$request->input("id");
        $data=$request->input("data");

        DB::table('tb1')->insert([
            'id' => $id,
            'data' => $data,
        ]);
        return redirect('/main')->with('success', '表單成功提交！');
    }

}
