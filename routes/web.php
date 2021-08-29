<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\test;
use App\Http\Models\test1;
use App\Models\UserPanel;

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
    return view('UserPanel.MainContentPage');
});
// Route::get('/add', function () {
//     return view('AdminPanel.AddTeacherForm');
// });

//AdminRoute
Route::get('/adminpanel','App\Http\Controllers\AdminPanelController@ShowView');
Route::get('/AddTeacherForm','App\Http\Controllers\AdminPanelController@AddTeacherForm');
Route::Post('/AddTeacher','App\Http\Controllers\AdminPanelController@AddTeacher')->name('AddTeacher');
Route::get('/TeachersView','App\Http\Controllers\AdminPanelController@TeachersView');
Route::get('teacherDelete/{id}','App\Http\Controllers\AdminPanelController@DeleteTeacher');
Route::get('editTeacher/{id}','App\Http\Controllers\AdminPanelController@EditTeacher');
Route::Post('UpdateTeacher/{id}','App\Http\Controllers\AdminPanelController@UpdateTeacher')->name('UpdateTeacher');;
Route::Post('/test','App\Http\Controllers\AdminPanelController@test')->name('test');


// Route::get('/test1','App\Http\Controllers\AdminPanelController@test1');
// Route::get('/testview','App\Http\Controllers\AdminPanelController@view');
// Route::get('/testviewdata/{id}','App\Http\Controllers\AdminPanelController@testviewdata');

// UserPanel
Route::get('/ShowTTableForMeeting','App\Http\Controllers\UserPanelController@ShowTeacherTableForMeeting');
Route::get('/MessageService','App\Http\Controllers\UserPanelController@MessageService');
Route::get('/ArrangeMeeting','App\Http\Controllers\UserPanelController@ArrangeMeeting');
Route::get('/userlogin', function () {
    return view('UserPanel.UserLogin');
});
Route::get('/Inbox', function () {
    return view('UserPanel.Inbox');
});




