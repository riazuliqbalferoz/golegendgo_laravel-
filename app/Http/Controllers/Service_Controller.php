<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Service_Controller extends Controller
{
    public function index(){
        return view('service');
    }
}
