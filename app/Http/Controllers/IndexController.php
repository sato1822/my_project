<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {
    public function index( Request $request ) {
      $results = DB::connection("mysql")->select("select * from items");
      // dd($results);
      // $insertResults = DB::connection("mysql")->insert("insert into items (id, name, price) values (null, 'みかん', 300)");
      // dd($insertResults);
        return view("index/index" , compact("results"));
    }
}