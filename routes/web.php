<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use App\Models\Product;

use App\Http\Controllers\OrderController;

use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('order', [OrderController::class, 'index']);
Route::get('order/create', function() {
    return view('order.create');
});
Route::post('order/create', [OrderController::class, 'store'])->name('add-order');

Route::get('mail/send', [MailController::class, 'send'])->name('email');


Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('product/add', function(){
    DB::table('products')->insert([
        'name'=> ' Tie',
        'price' => '10',
        'size' => 'regular'

    ]);
});