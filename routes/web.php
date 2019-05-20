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

/*Route::get('/', function () {
    return view('home/index');
});*/


Route::get('/', 'UsersController@index')->name('home');
Route::get('terms', 'UsersController@terms')->name('terms');
Route::get('privacy', 'UsersController@privacy')->name('privacy');
Route::get('about', 'UsersController@about')->name('about');
Route::get('contact', 'UsersController@contact')->name('contact');
Route::get('services', 'UsersController@services')->name('services');
//cron url
Route::get('cron', 'Controller@autotopup')->name('cron');

Auth::routes();


	Route::get('licensing', 'UsersController@licensing')->name('licensing');

	Route::get('dashboard/deposits', ['middleware' => 'auth', 'uses' => 'Controller@deposits'])->name('deposits');
	Route::get('dashboard/skip_account', ['middleware' => 'auth', 'uses' => 'Controller@skip_account'])->name('skip_account');
	Route::get('dashboard/payment', 'SomeController@payment')->name('payment');
	Route::get('dashboard/agents', ['middleware' => 'auth', 'uses' => 'Controller@agents'])->name('agents');
	Route::get('dashboard/viewagent/{agent}', ['middleware' => 'auth', 'uses' => 'Controller@viewagent'])->name('viewagent');
	Route::get('dashboard/tradinghistory', 'SomeController@tradinghistory')->name('tradinghistory');
	Route::get('dashboard/manageusers', ['middleware' => 'auth', 'uses' => 'Controller@manageusers'])->name('manageusers');
	Route::get('dashboard/mwithdrawals', ['middleware' => 'auth', 'uses' => 'Controller@mwithdrawals'])->name('mwithdrawals');
	Route::get('dashboard/mdeposits', ['middleware' => 'auth', 'uses' => 'Controller@mdeposits'])->name('mdeposits');
	Route::get('dashboard/withdrawals', ['middleware' => 'auth', 'uses' => 'Controller@withdrawals'])->name('withdrawalsdeposits');
	Route::get('dashboard', ['middleware' => 'auth', 'uses'=>'Controller@dashboard','as'=>'dashboard']);
	Route::get('dashboard/ublock/{id}', ['middleware' => 'auth', 'uses' => 'Controller@ublock']);
	Route::get('dashboard/pdeposit/{id}', ['middleware' => 'auth', 'uses' => 'Controller@pdeposit']);
	Route::get('dashboard/pwithdrawal/{id}', ['middleware' => 'auth', 'uses' => 'Controller@pwithdrawal']);
	Route::get('dashboard/unblock/{id}', ['middleware' => 'auth', 'uses' => 'Controller@unblock']);
	Route::get('dashboard/paywithcard/{amount}', ['middleware' => 'auth', 'uses' => 'UsersController@paywithcard'])->name('paywithcard');
	Route::get('dashboard/cpay/{amount}/{coin}/{ui}/{msg}', ['uses' => 'Controller@cpay'])->name('cpay');
	Route::get('dashboard/mplans', ['middleware' => 'auth', 'uses' => 'Controller@mplans'])->name('mplans');
	
	Route::get('dashboard/myplans', ['middleware' => 'auth', 'uses' => 'Controller@myplans'])->name('myplans');
	
	Route::get('dashboard/plans', ['middleware' => 'auth', 'uses' => 'Controller@plans'])->name('plans');
	Route::get('dashboard/pplans', ['middleware' => 'auth', 'uses' => 'Controller@pplan'])->name('pplans');
	Route::get('dashboard/trashplan/{id}', ['middleware' => 'auth', 'uses' => 'Controller@trashplan']);
	Route::get('dashboard/deletewdmethod/{id}', ['middleware' => 'auth', 'uses' => 'SomeController@deletewdmethod']);
	Route::get('dashboard/deldeposit/{id}', ['middleware' => 'auth', 'uses'=>'UsersController@deldeposit', 'as'=>'deldeposit']);
	//Route::get('dashboard/joinplan/{id}', ['middleware' => 'auth', 'uses' => 'Controller@joinplan']);
	Route::get('ref/{id}', ['middleware' => 'auth', 'uses'=>'Controller@ref', 'as'=>'ref']);
	Route::get('dashboard/resetpswd/{id}', ['middleware' => 'auth', 'uses'=>'UsersController@resetpswd', 'as'=>'resetpassword']);
	Route::get('dashboard/clearacct/{id}', ['middleware' => 'auth', 'uses'=>'Controller@clearacct', 'as'=>'clearacct']);
	Route::get('dashboard/deluser/{id}', ['middleware' => 'auth', 'uses'=>'UsersController@deluser', 'as'=>'deluser']);
	Route::get('dashboard/settings', ['middleware' => 'auth', 'uses'=>'SomeController@settings', 'as'=>'settings']);
	
	Route::post('dashboard/search', ['middleware' => 'auth', 'uses' => 'Controller@search']);

    Route::post('dashboard/joinplan', ['middleware' => 'auth', 'uses' => 'Controller@joinplan']);
	Route::post('dashboard/paywithcard/charge', ['middleware' => 'auth', 'uses' => 'UsersController@charge']);
	Route::post('dashboard/updateplan', ['middleware' => 'auth', 'uses' => 'Controller@updateplan']);
	Route::post('dashboard/withdrawal', 'SomeController@withdrawal');
	Route::post('sendcontact', 'UsersController@sendcontact');
	Route::post('dashboard/deposit', 'SomeController@deposit');
	Route::post('dashboard/sendmail', 'UsersController@sendmail');
	Route::post('dashboard/topup', 'SomeController@topup');
	Route::post('dashboard/savedeposit', 'SomeController@savedeposit');
	Route::post('dashboard/addwdmethod', 'SomeController@addwdmethod');
	Route::post('dashboard/updatewdmethod', 'SomeController@updatewdmethod');
	Route::post('dashboard/saveuser', ['middleware' => 'auth', 'uses' => 'Controller@saveuser']);
	Route::post('dashboard/addplan', ['middleware' => 'auth', 'uses' => 'Controller@addplan']);
	
	Route::post('dashboard/updatecpd', 'SomeController@updatecpd');
	Route::post('dashboard/updatesettings', 'SomeController@updatesettings');



	Route::get('dashboard/accountdetails', ['middleware' => 'auth', 'uses'=>'UsersController@accountdetails', 'as'=>'acountdetails']);
	Route::get('dashboard/changepassword', ['middleware' => 'auth', 'uses'=>'UsersController@changepassword', 'as'=>'changepassword']);
	Route::get('dashboard/support', ['middleware' => 'auth', 'uses'=>'Controller@support', 'as'=>'support']);
	Route::get('dashboard/withdrawal', ['middleware' => 'auth', 'uses'=>'SomeController@withdrawal', 'as'=>'withdrawal']);
	Route::get('dashboard/phusers', ['middleware' => 'auth', 'uses'=>'SomeController@phusers', 'as'=>'phusers']);
	Route::get('dashboard/matchinglist', ['middleware' => 'auth', 'uses'=>'SomeController@matchinglist', 'as'=>'matchinglist']);
	Route::get('dashboard/ghuser', ['middleware' => 'auth', 'uses'=>'SomeController@ghuser', 'as'=>'ghuser']);
	Route::get('dashboard/confirmation/{id}', ['middleware' => 'auth', 'uses'=>'UsersController@confirmation', 'as'=>'confirmation']);
	Route::get('dashboard/tupload/{id}', ['middleware' => 'auth', 'uses'=>'UsersController@tupload', 'as'=>'tupload']);
	Route::get('dashboard/dnpagent', ['middleware' => 'auth', 'uses'=>'UsersController@dnpagent', 'as'=>'dnpagent']);
	Route::get('dashboard/referuser', ['middleware' => 'auth', 'uses'=>'UsersController@referuser', 'as'=>'referuser']);
	//Route::get('dashboard/join/{plan}', ['middleware' => 'auth', 'uses'=>'UsersController@join', 'as'=>'join']);

	Route::post('dashboard/upload', 'UsersController@upload');
	Route::post('dashboard/confirm', 'UsersController@confirm');
	Route::get('dashboard/mconfirm/{id}/{ph_id}/{amount}', 'UsersController@mconfirm');
	Route::get('dashboard/mdelete/{id}/{ph_id}/{amount}', 'UsersController@mdelete');
	Route::post('dashboard/withdraw', 'SomeController@withdraw');
	Route::post('dashboard/updatephoto', 'UsersController@updatephoto');
	Route::post('dashboard/updateacct', 'UsersController@updateacct');
	Route::post('dashboard/updatepass', 'UsersController@updatepass');
	Route::post('dashboard/dnate', 'UsersController@dnate');
	Route::get('dashboard/donation', ['uses'=>'UsersController@donation', 'as'=>'donation']);
	Route::get('dashboard/donate/{plan}', ['uses'=>'UsersController@donate', 'as'=>'donate']);
	Route::get('ref/{id}', ['uses'=>'UsersController@ref', 'as'=>'ref']);
	Route::post('reguser', 'Auth\AuthController@reguser');
	Route::post('dashboard/saveagent', 'UsersController@saveagent');


Route::group(['middleware' => 'web'], function () {
	
});
