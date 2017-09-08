<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return "Lumen RESTful API plesgram.com (http://doc.plesgram.com)";
});

$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app){

	$app->get('/method/accountsettings', 'AuthController@index');
	$app->get('/method/dialogs_new', 'AuthController@index');
	$app->post('/method/chatupdate', 'AuthController@index');
	$app->post('/method/accountsignIn', 'AuthController@index');
	$app->post('/method/accountauthorize', 'AuthController@index');
	$app->post('/method/accountsetGcmToken', 'AuthController@index');
	$app->post('/method/accountsignInByFacebook', 'AuthController@index');
	$app->post('/method/accountsignInByFacebook', 'AuthController@index');
	$app->post('/method/accountrecovery', 'AuthController@index');
	$app->post('/method/accountsetPassword', 'AuthController@index');
	$app->post('/method/accountdeactivate', 'AuthController@index');
	$app->post('/method/accountsaveSettings', 'AuthController@index'); 
	$app->post('/method/accountconnectToFacebook', 'AuthController@index');
	$app->post('/method/accountdisconnectFromFacebook', 'AuthController@index');
	$app->post('/method/accountlogOut', 'AuthController@index');
	$app->post('/method/accountsetAllowComments', 'AuthController@index');
	$app->post('/method/accountsetAllowMessages', 'AuthController@index');
	$app->post('/method/accountsetAllowPhotosComments', 'AuthController@index');
});