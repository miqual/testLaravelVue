<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use DB;

class SinglePageController extends BaseController
{
     use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index() {
        return view('app');
    }
    public function demo() {
        return view('demo');
    }
    public function hello() {
        $name = "";
        // return view('hello',compact("name"));
        // return view('hello',['name' => 'James']);

        $places = DB::select('select * from places');
     
        $name =json_encode($places);

        //return view('hello')->with('name', $name);
        //return view('hello')->with('name', $name)->with('places', $places);
        //return view('hello',['name' => $name,'places' => $places]);
        return view('hello',['name' => $name,'places' => $name]);
    }
}

