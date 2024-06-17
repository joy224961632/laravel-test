<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DataController extends Controller
{
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

    public function update_1(Request $request)
    {
        $id=$request->input("id");
        $data=$request->input("data");

        DB::table('tb1')->updateOrInsert(
            ['id' => $id],
            ['id' => $id,'data' => $data]
        );
        return redirect('/main')->with('success', '表單成功提交！');
    }

    public function de_1(Request $request)
    {
        $id=$request->input("id");
        $data=$request->input("data");

        $deleted = DB::table('tb1')->where('id', '=', $id)->delete();
        return redirect('/main')->with('success', '表單成功提交！');
    }
    public function de_2(Request $request)
    {
        $id=$request->input("id");
        $data=$request->input("data");

        $deleted = DB::table('tb1')->where('id', '=', $id)->delete();
        return redirect('/main')->with('success', '表單成功提交！');
    }
}
