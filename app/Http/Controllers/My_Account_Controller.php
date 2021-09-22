<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class My_Account_Controller extends Controller
{
    public function index(){
        return view('profile.myAccount');
    }
    public function glg(){
        return view('profile.glg');
    }
    public function profile(){
        return view('profile.profile');
    }
    public function check_balance(){
        return view('profile.check_balance');
    }
    public function transfer(){
        return view('profile.transfer');
    }
    public function transfer_to_product(){
        
        return view('profile.transfer_to_product');
    }
    public function withdraw(){
        return view('profile.withdraw');
    }
    public function report(){
        return view('profile.report');
    } 
}
