<?php
use Illuminate\Http\Request;
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
// Route::resource('photos', 'PhotoController');
Route::get('docSetup','DOCsetup\CreateDocumentController@index');
Route::get('users','users\UserHome@index');
Route::get('/', function (Request $request) {
     
    return view('welcome');
    
});
