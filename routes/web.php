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
use App\User;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/createadmin', function () {
	$admin = new User();
	$admin->name = "admin";
	$admin->email = "admin@gmail.com";
	$admin->so_dien_thoai = 1;
	$admin->password = bcrypt('123456');
    $admin->save();
   	
   	dd($admin);
});

Route::get('/login', 'Website\Auth\LoginController@getLogin')->name('getLogin');
Route::post('/login', 'Website\Auth\LoginController@postLogin')->name('postLogin');
Route::get('/logout', 'Website\Auth\LoginController@logout')->name('web.logout');



Route::get('/', 'Website\HomeController@homepage')->name('homepage');
//Route::get('/dat-tour/{id}', 'Website\HomeController@dat_tour')->name('dat_tour');

Route::get('/detail-tour/{id}', 'Website\HomeController@viewDetailTour')->name('detail_tour');
Route::get('/cam-nang-du-lich', 'Website\HomeController@camLangDuLich')->name('camLangDuLich');
Route::get('/cam-nang-du-lich/xem/{id}', 'Website\HomeController@xemCamLangDuLich')->name('detail_cam_nang');

Route::get('thanh-toan/{id}', 'Website\HomeController@thanhToan')->name('thanhToan');


Route::post('/thanh-toan', 'Website\HomeController@postThanhToan')->name('postThanhToan');

//Route::get('/tai-khoan-cua-toi', 'Website\HomeController@taiKhoanCuaToi')->name('taiKhoanCuaToi');
Route::get('/gioi-thieu', 'Website\HomeController@gioiThieu')->name('gioiThieu');

//Route::get('/tai-khoan/{id}', 'Website\HomeController@taiKhoan')->name('taiKhoan');
Route::get('/tai-khoan', 'Website\HomeController@taiKhoan')->name('taiKhoan');
Route::get('/lien-he', 'Website\HomeController@lienHe')->name('lienHe');
Route::get('/tro-giup', 'Website\HomeController@troGiup')->name('troGiup');
Route::get('/ve-chung-toi', 'Website\HomeController@veChungToi')->name('veChungToi');
Route::get('/cau-hoi-thuong-gap', 'Website\HomeController@cauHoiThuongGap')->name('cauHoiThuongGap');
Route::get('/dieu-khoan-va-bao-mat', 'Website\HomeController@dieuKhoanVaBaoMat')->name('dieuKhoanVaBaoMat');
Route::get('/dieu-kien', 'Website\HomeController@dieuKien')->name('dieuKien');

//Route::get('/detail-thanhtoan/{id}', 'Website\HomeController@viewThanhToan')->name('thanh_toan');

Route::get('/dangKy', 'Website\HomeController@dangKy')->name('dangKy');
Route::post('/dangKy', 'Website\HomeController@postdangKy')->name('post.dangKy');


Route::post('/thanh-toan', 'Website\HomeController@StoreThanhToan')->name('StoreThanhToan');

