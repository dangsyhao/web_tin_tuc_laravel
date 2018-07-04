<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }


    function index(){
        return view('admin.index');
    }

    function test2(){
        return view('admin.index');
    }
}
