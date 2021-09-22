<?php


use Illuminate\Support\Facades\Route;


// profile
use App\Http\Controllers\profile\Acount_Info_Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Service_Controller;
use App\Http\Controllers\My_Account_Controller;
use App\Http\Controllers\ID_Info;
use App\Http\Controllers\cart;
use App\Http\Controllers\team\Member_Profile_Controller;
use App\Http\Controllers\message_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [Service_Controller::class, 'index'])->name('service');

// account
Route::get('/account', [My_Account_Controller::class, 'index'])->name('account');
Route::get('/account/glg', [My_Account_Controller::class, 'glg'])->name('account.glg');
Route::get('/account/profile', [My_Account_Controller::class, 'profile'])->name('account.profile');
Route::get('/account/check_balance', [My_Account_Controller::class, 'check_balance'])->name('account.check_balance');
Route::get('/account/transfer', [My_Account_Controller::class, 'transfer'])->name('account.transfer');
Route::get('/account/transfer_to_product', [My_Account_Controller::class, 'transfer_to_product'])->name('account.transferProduct');
Route::get('/account/withdraw', [My_Account_Controller::class, 'withdraw'])->name('account.withdraw');
Route::get('/account/report', [My_Account_Controller::class, 'report'])->name('account.report');

Route::get('/ID_Info', [ID_Info::class, 'index'])->name('IDInfo');
Route::get('/cart', [cart::class, 'index'])->name('cart');

// member
Route::get('/member/profile', [Member_Profile_Controller::class, 'index'])->name('member.profile');
Route::get('/message', [message_controller::class, 'index'])->name('message');