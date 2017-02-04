<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::group(['domain' => '{account}.ecart.dev','middleware'=>'SwitchDB'], function () {
    Route::get('/', function ($domain) {
     // echo $domain;
    });
});
***/
Route::post('/address','AjaxController@findAddress');
//Route::get('/address','AjaxController@findAddress');
Route::get('/', function () {
	if(Entrust::hasRole(['Administrator','Staff']))
		return redirect('admin/dashboard');
	else
		return redirect('/login');
});
Route::group(['middleware' => ['role:Administrator']], function() {
    Route::get('/admin/dashboard', 'Admin\PageController@dashboard');
    Route::controller('admin/property-sale', 'Admin\SalePropertyController');
    Route::controller('admin/property-let', 'Admin\LetPropertyController');
    Route::controller('admin/customers', 'Admin\CustomersController');
    Route::get('/admin/users', 'UserController@index');
	

	//Route::get('/manage', ['middleware' => ['permission:manage-admins'], 'uses' => 'AdminController@manageAdmins']);
});
/*
$router->group(['namespace' => 'Admin','middleware' => 'auth',], function () 
{
	Route::resource('admin/pages', 'PageController');
	Route::resource('admin/user', 'UserController');
	Route::resource('admin/roles', 'RoleController');
	
	Route::controller('admin/property-sale', 'SalePropertyController');
	Route::get('/admin/dashboard', 'PageController@dashboard');
	Route::get('/admin/users', 'UserController@index');
	Route::controller('admin/property-let', 'LetPropertyController');
	
//	Route::post('property-sale/{type}', $callback);
//	Route::put('property-sale', $callback);
	//Route::patch($uri, $callback);
//	Route::delete($uri, $callback);
//	Route::options($uri, $callback);

//	Route::resource('admin/property-sale/{type?}', 'SalePropertyController')->where('type', '/[^a-zA-Z0-9_\.-]/');;
	//Route::resource('admin/property-let', 'LetPropertyController');
	//Route::resource('admin/property-managed', 'ManagedPropertyController');
	
	//Route::get('admin/property', 'PropertyController@create')->name('info');


	/*Route::get('admin/roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
	Route::get('admin/roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
	Route::post('admin/roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
	Route::get('admin/roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('admin/roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
	Route::patch('admin/roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
	Route::delete('admin/roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
 // Route::resource('admin/tag', 'TagController');
 // Route::get('admin/upload', 'UploadController@index');*/
//});
// Logging in and out
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');
Route::resource('admin/user', 'UserController');
Route::auth();
Route::get('/home', 'HomeController@index');
