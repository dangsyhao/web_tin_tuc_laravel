<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
   function index(){
       return view('site.index');
   }
}
