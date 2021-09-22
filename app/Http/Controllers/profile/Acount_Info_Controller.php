<?php

namespace App\Http\Controllers\profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Acount_Info_Controller extends Controller
{
   

    public function index(){
        return view('profile.accountInfo');
    }
}
