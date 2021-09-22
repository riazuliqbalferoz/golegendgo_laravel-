<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Member_Profile_Controller extends Controller
{
    public function index(){
        return view("member.member_profile");
    }
}
