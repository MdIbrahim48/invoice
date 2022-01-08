<?php

use App\DemoData;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['register' => false,'login' => false]);


//----------------frontend route start----------------
Route::group(['namespace'=> 'Frontend','as'=>'client.'],function () {
    Route::get('/dashboard','ClientController@index')->name('dashboard');
    Route::get('/profile','ClientController@profile')->name('profile.index');
    Route::post('/update-profile','ClientController@updateProfile')->name('profile.update');
    Route::post('/update-password','ClientController@updatePassword')->name('profile.update_password');
});

Route::group(['namespace' => 'Admin\Auth','prefix'=>'admin','as' => 'admin.'],function(){
   // login controller
   Route::get('/login','LoginController@create')->name('login');
   Route::post('/login/authenticate','LoginController@authenticate')->name('login.authenticate');
   Route::get('/logout','LoginController@logout')->name('logout');

    // forget password
    Route::get('/forget/password','ForgetPasswordController@forget_password')->name('forget.password');
    Route::post('/forget/password/post','ForgetPasswordController@submitForgetPassword')->name('forget.password.post');

    //reset password
    Route::get('reset/password/{token}','ResetPasswordController@index')->name('reset.password');
    Route::post('reset-password/submit','ResetPasswordController@submitResetPasswordForm')->name('reset-password.submit-form');


    // verify user email
    Route::get('user/verify-email/{token}','VerifyUserController@verifyEmail')->name('user.verify_email');

});

Route::group(['namespace' => 'Admin','prefix'=>'admin','middleware' => ['auth','checkStatus','checkRole'],'as' => 'admin.'],function () {
    Route::get('/dashboard','HomeController@index')->name('dashboard');

    // --------------user controller start--------------
    Route::group(['prefix'=>'user','as' => 'user.'],function(){
        Route::get('/all','UserController@index')->name('index');
        Route::get('/create','UserController@create')->name('create');
        Route::post('/store','UserController@store')->name('store');
        Route::get('/edit/{id}','UserController@edit')->name('edit');
        Route::post('/update/{id}','UserController@update')->name('update');
        Route::get('/delete/{id}','UserController@delete')->name('delete');
        // live email validate
        Route::get('/email-validate','UserController@emailValidate')->name('email-validate');


        // user restore
        Route::get('/trash/restore/{email}','UserController@trashRestore')->name('restore');
        Route::get('/parmanent/delete/{email}','UserController@parmanentDelete')->name('permanentDelete');

    });
    // --------------user controller end--------------

    //-------------profile controller start-------
      Route::group(['prefix' => 'profile','as'=>'profile.'],function(){
        Route::get('/index','ProfileController@index')->name('index');
        Route::post('/update/{id}','ProfileController@profileUpdate')->name('update');
        Route::post('/update/password/{id}','ProfileController@update_password')->name('update_password');
    });
    //-------------profile controller end --------

    //-------------category controller start-------
    Route::group(['prefix' => 'category','as'=>'category.'],function(){
        Route::get('/all','CategoryController@index')->name('index');
        Route::get('/create','CategoryController@create')->name('create');
        Route::post('/store','CategoryController@store')->name('store');
        Route::get('/edit/{id}','CategoryController@edit')->name('edit');
        Route::post('/update/{id}','CategoryController@update')->name('update');
        Route::get('/destroy/{id}','CategoryController@destroy')->name('destroy');
    });
    //-------------category controller end --------

    //-------------category controller start-------
    Route::group(['prefix' => 'expense','as'=>'expense.'],function(){
        Route::get('/all','ExpenseController@index')->name('index');
        Route::get('/create','ExpenseController@create')->name('create');
        Route::post('/store','ExpenseController@store')->name('store');
        Route::get('/edit/{id}','ExpenseController@edit')->name('edit');
        Route::post('/update/{id}','ExpenseController@update')->name('update');
        Route::get('/destroy/{id}','ExpenseController@destroy')->name('destroy');
    });
    //-------------category controller end --------

    //-------------product controller start-------
    Route::group(['prefix' => 'product','as'=>'product.'],function(){
        Route::get('/all','ProductController@index')->name('index');
        Route::get('/create','ProductController@create')->name('create');
        Route::post('/store','ProductController@store')->name('store');
        Route::get('/edit/{id}','ProductController@edit')->name('edit');
        Route::post('/update/{id}','ProductController@update')->name('update');
        Route::get('/destroy/{id}','ProductController@destroy')->name('destroy');

        // product restore
        Route::get('/all/trash','ProductController@allDeletedProduct')->name('deleted-product');
        Route::get('/product/restore/{id}','ProductController@restoreProduct')->name('restore-product');
        Route::get('/parmanent/delete/{id}','ProductController@parmanentDelete')->name('parmanentDelete');

    });
    //-------------product controller end --------

    //-------------client controller start-------
    Route::group(['prefix' => 'client','as'=>'client.'],function(){
        Route::get('/all','ClientController@index')->name('index');
        Route::get('/create','ClientController@create')->name('create');
        Route::post('/store','ClientController@store')->name('store');
        Route::get('/edit/{id}','ClientController@edit')->name('edit');
        Route::post('/update/{email}','ClientController@update')->name('update');
        Route::get('/destroy/{email}','ClientController@destroy')->name('destroy');

        Route::get('/all/deleted-client','ClientController@allDeletedClient')->name('deleted-client');
        Route::get('/restore-client/{email}','ClientController@restoreClient')->name('restore-client');
        Route::get('/permanent-delete/{email}','ClientController@permanentDelete')->name('permanent-delete');
    });
    //-------------client controller end --------

    // --------------Source Invoice controller start-------------
    Route::group(['prefix'=>'invoice','as' => 'invoice.'],function(){
        Route::get('/source/create','SourceInvoiceController@sourceCreate')->name('create.source');
        Route::get('/savedata','SourceInvoiceController@saveData')->name('saveData');
        Route::get('/removedata','SourceInvoiceController@removeData')->name('removeData');

        Route::post('/source-invoice/store','SourceInvoiceController@sourceStore')->name('sourceStore');

        Route::get('/billing/name/{id}','SourceInvoiceController@billingName')->name('billingName');
        Route::get('/product/name','SourceInvoiceController@productName')->name('productName');

     });
    // --------------Source Invoice controller end--------------


    // --------------Shipment Invoice controller start-------------
    // Route::group(['prefix'=>'invoice','as' => 'invoice.'],function(){
    //     Route::get('/source/create','InvoiceController@sourceCreate')->name('create.source');
    //     Route::get('/shipment/create','InvoiceController@shipmentCreate')->name('create.shipment');

    //     Route::get('/savedata','InvoiceController@saveData')->name('saveData');
    //     Route::get('/removedata','InvoiceController@removeData')->name('InvoiceController');

    //  });
    // --------------Shipment Invoice controller end--------------


    // --------------setting controller start-------------
      Route::group(['prefix'=>'setting','as' => 'setting.'],function(){
        Route::get('/index','SettingController@index')->name('index');
        Route::post('/update/{id}','SettingController@update')->name('update');
     });
    // --------------setting controller end--------------

});



