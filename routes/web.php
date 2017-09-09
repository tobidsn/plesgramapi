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
	
	$app->post('/method/photosremove', 'AuthController@index');
	$app->get('/method/photos', 'AuthController@index');
	$app->post('/method/photosnew', 'AuthController@index');
	$app->post('/method/photosreport', 'AuthController@index');
	$app->post('/method/photosuploadImg', 'AuthController@index');

	$app->get('/method/images', 'AuthController@index');
	$app->post('/method/imagescomment', 'AuthController@index');
	$app->post('/method/imagescommentRemove', 'AuthController@index');
	$app->post('/method/imageslike', 'AuthController@index');
	$app->post('/method/imageslikes', 'AuthController@index');

	$app->post('/method/videoremove', 'AuthController@index');
	$app->post('/method/vidNotieo', 'AuthController@index');
	$app->post('/method/videonew', 'AuthController@index');
	$app->post('/method/videoreport', 'AuthController@index');
	$app->post('/method/videoupload', 'AuthController@index');
	$app->post('/method/videoItem', 'AuthController@index');
	$app->post('/method/videocomment', 'AuthController@index');
	$app->post('/method/videocommentRemove', 'AuthController@index');
	$app->post('/method/videolike', 'AuthController@index');
	$app->post('/method/videolikes', 'AuthController@index');

	$app->get('/method/notifications', 'AuthController@index');
	$app->get('/method/hashtags', 'AuthController@index');
	$app->get('/method/feeds', 'AuthController@index');
	$app->get('/method/item', 'AuthController@index');
	$app->get('/method/stream', 'AuthController@index');
	$app->get('/method/popular', 'AuthController@index');

	$app->post('/method/appcheckUsername', 'AuthController@index');
	$app->get('/method/appterms', 'AuthController@index');
	$app->get('/method/appthanks', 'AuthController@index');
	$app->post('/method/appsearch', 'AuthController@index');
	$app->post('/method/appsearchPreload', 'AuthController@index');
	$app->post('/method/itemsremove', 'AuthController@index');
	$app->get('/method/items', 'AuthController@index');
	$app->post('/method/itemsuploadImg', 'AuthController@index');
	$app->post('/method/itemsnew', 'AuthController@index');
	$app->post('/method/itemsedit', 'AuthController@index');
	$app->get('/method/itemsreport', 'AuthController@index');
	$app->get('/method/itemslike', 'AuthController@index');
	$app->get('/method/itemslikes', 'AuthController@index');

	$app->get('/method/favorites', 'AuthController@index');
	$app->del('/method/comments', 'AuthController@index');
	$app->post('/method/comments', 'AuthController@index');

	$app->get('/method/chat', 'AuthController@index');
	$app->del('/method/chat', 'AuthController@index');
	$app->post('/method/chatgetPrevious', 'AuthController@index');
	$app->post('/method/chatgetNext', 'AuthController@index');

	$app->get('/method/conversations', 'AuthController@index');
	$app->post('/method/msg', 'AuthController@index');

	$app->post('/method/msg.uploadImg', 'AuthController@index');

});