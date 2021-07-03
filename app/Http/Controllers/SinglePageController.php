<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
        $name = "hhhhhh11";
        // return view('hello',compact("name"));
        // return view('hello',['name' => 'James']);
        return view('hello')->with('name', $name);
    }
}

