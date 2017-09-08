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
	$app->post('/method/accountsetGeoLocation', 'AuthController@index');
	$app->post('/method/accountaddFunds', 'AuthController@index');
	$app->post('/method/accountsetGhostMode', 'AuthController@index');
	$app->post('/method/accountsetAllowLikesGCM', 'AuthController@index');
	$app->post('/method/accountsetAllowCommentsGCM', 'AuthController@index');
	$app->post('/method/accountsetAllowFollowersGCM', 'AuthController@index');
	$app->post('/method/accountsetAllowMessagesGCM', 'AuthController@index');
	$app->post('/method/accountsetAllowGiftsGCM', 'AuthController@index');
	$app->post('/method/accountsetAllowCommentReplyGCM', 'AuthController@index');


	$app->post('/method/giftsremove', 'AuthController@index');
	$app->get('/method/gifts', 'AuthController@index');
	$app->post('/method/giftsselect', 'AuthController@index');
	$app->post('/method/giftssend', 'AuthController@index');
	$app->post('/method/profilegetPeopleNearby', 'AuthController@index');
	$app->post('/method/accountsetVerifiedBadge', 'AuthController@index');
	$app->post('/method/accountdisableAds', 'AuthController@index');
	$app->get('/method/guests', 'AuthController@index');
	$app->post('/method/supportsendTicket', 'AuthController@index');
	
	$app->get('/method/profile', 'AuthController@index');
	$app->get('/method/profilefollowings', 'AuthController@index');
	$app->get('/method/profilefollowers', 'AuthController@index');
	$app->post('/method/profilefollow', 'AuthController@index');
	$app->post('/method/profileuploadPhoto', 'AuthController@index');
	$app->post('/method/profileuploadCover', 'AuthController@index');

	$app->get('/method/wall', 'AuthController@index');
	$app->get('/method/group', 'AuthController@index');
	$app->post('/method/groupcreate', 'AuthController@index');
	$app->post('/method/groupsaveSettings', 'AuthController@index');
	$app->get('/method/groupMyGroups', 'AuthController@index');
	$app->get('/method/groupManagedGroups', 'AuthController@index');
	$app->get('/method/groupFollowers', 'AuthController@index');
	$app->post('/method/groupfollow', 'AuthController@index');
	$app->post('/method/groupsearch', 'AuthController@index');
	$app->post('/method/groupuploadPhoto', 'AuthController@index');
	$app->get('/method/groupWall', 'AuthController@index');
	$app->get('/method/blacklist', 'AuthController@index');
	$app->post('/method/blacklistnew', 'AuthController@index');
	$app->post('/method/blacklistremove', 'AuthController@index');

});