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

Route::get('/', function () {
    return view('welcome');
});
// use App\Loai;
// Route::get('/danhsachloai',function(){
// 	//$ds_loai = Loai::all();
// 	$ds_loai = DB::table('loai') -> get();// Query Bulder
// 	$json = json_encode($ds_loai);
// 	return $json;
// });
// use App\ChuDe;
// Route::get('/danhsachchude',function(){
// 	$ds_chude = ChuDe::all();
// 	$json = json_encode($ds_chude);
// 	return $json;
// });
Route::get('/danhsachloai', 'LoaiController@index')->name('danhsachloai.index');
Route::get('/danhsachchude', 'ChuDeController@index')->name('danhsachchude.index');