<?php  
 
Route::get('/', function () {       return view('welcome'); });    

// ========== Login and validation ============
Route::group(['middleware' => ['web']], function () {    
    Route::auth(); 
});

use App\Comment;
Route::get('myview', 'GuestbookController@reindex' );
Route::get('myview/index', 'GuestbookController@index' );
Route::post('myview/search', 'GuestbookController@search');

Route::post('myview/addComment','GuestbookController@addComment');
Route::get('myview/delete/{id}','GuestbookController@delete');
Route::get('myview/edit/{id}','GuestbookController@editComment');
Route::post('myview/saveComment/{id}','GuestbookController@saveComment');
