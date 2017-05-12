<?php  
 
//Route ไปยังหน้าเเรก จะเเสดงหน้าจอสีขาว พร้อมข้อความ "Laravel" ขึ้นมา
Route::get('/', function () {       return view('welcome'); });    

// ========== Login and validation ============
Route::group(['middleware' => ['web']], function () {    
    Route::auth(); 
});

//สั่งให้ใช้ App\Comment
use App\Comment;
//เพิ่ม Route ของ Guestbook ตาม Function,File ที่สร้างขึ้นมา
Route::get('myview', 'GuestbookController@reindex' ); //หน้าเเรก
Route::get('myview/index', 'GuestbookController@index' ); //หน้าเเรก
Route::post('myview/search', 'GuestbookController@search'); //หน้าค้นหา

Route::post('myview/addComment','GuestbookController@addComment');  //หน้า Add Comment
Route::get('myview/delete/{id}','GuestbookController@delete'); //หน้า ลบ Comment
Route::get('myview/edit/{id}','GuestbookController@editComment'); //หน้าแก้ไข Comment
Route::post('myview/saveComment/{id}','GuestbookController@saveComment'); //Save Comment
