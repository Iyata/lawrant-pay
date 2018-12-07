<?php

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

//PAYMENT ROUTES
Route::get('', 'PaymentController@index');
Route::get('/payment/request', 'PaymentController@generatePayRequest');

// Route::get('', function () {
//     return view('payHome');
// });


// Route::get('/payment/request', function () {
//     return view('/payments/generatePay');
// });

Route::get('payment/approve', function(){
    return view('/payments/approvePay');
});

Route::get('payment/view_request', function(){
    return view('/payments/viewPay');
});

Route::get('payment/confirm_receipt', function(){
    return view('/payments/confirmPay');
});

Route::get('/admin/create', function () {
    return view('createCat');
});

Route::post('admin/create', "categoryController@create");