<?php




Route::get('admin/dashboard', 'Admin\DashboardController@dashboard');

//Route::get('admin/dangnhap', 'UserController@getDangnhapAdmin');
//Route::post('admin/dangnhap', 'UserController@postDangnhapAdmin');

//Route::get('/', 'Admin\DashboardController@dashboard')->name('dashboard');
// // Get danh sách
// Route::get('admin/dia-diem', 'Admin\DiaDiemController@index')->name('admin.dia-diem.index');
// // Get form tạo
// Route::get('admin/dia-diem/create', 'Admin\DiaDiemController@create')->name('admin.dia-diem.create');
// // Xử lý lưu trữ dl vào db
// Route::post('admin/dia-diem/store', 'Admin\DiaDiemController@store')->name('admin.dia-diem.store');
// // Get bản ghi cần sửa
// Route::get('admin/dia-diem/{id}/edit', 'Admin\DiaDiemController@edit')->name('admin.dia-diem.edit');
// // Xử lý sửa. update trong db
// Route::post('admin/dia-diem/{id}', 'Admin\DiaDiemController@update')->name('admin.dia-diem.update');

// đăng nhập admin
Route::get('admin/dangnhap', 'Admin\LoginController@getDangnhapAdmin')->name('admin.login');
Route::post('admin/dangnhap', 'Admin\LoginController@postDangnhapAdmin')->name('postDangnhapAdmin');

//'middleware' => ['auth:admins']
Route::group(['prefix' => 'admins'], function () {

    Route::resource('admin/dat-tour', 'Admin\DatTourController');
    Route::resource('admin/tour-tour', 'Admin\TourController');
    Route::resource('admin/dia-diem', 'Admin\DiaDiemController');
    Route::resource('admin/thanh-toan', 'Admin\ThanhToanController');
    Route::resource('admin/tin-tuc', 'Admin\TinTucController');
    Route::resource('admin/dich-vu', 'Admin\DichVuController');
    Route::resource('admin/khuyen-mai', 'Admin\KhuyenMaiController');
    Route::resource('admin/user-s', 'Admin\UserController');
    Route::resource('admin/thiet-lap', 'Admin\ThietLapController');

    Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');


});