<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\QuanTri\LoginQuanTriRequest;
use Session;

//  php artisan make:controller Admin/DiaDiemController
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admins');
    }

    // function index để show ra ds 
    public function index()
    {
        $user = User::latest()->paginate();
        return view('website.user.index', compact('user'));
    }
    
    public function create()
    {
        return view('website.user.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        // getClientOriginalExtension
        // return $request->chi_tiet_dia_diem;
        // DiaDiem::create($request-all());
        // $ThietLap_insert = ThietLap::create([
        //     // tên cột => giá trị name ở input
        //     'logo' => $request->logo,
        //     'banner' => $request->banner,
        //     'link_lien_Ket' => $request->link_lien_Ket,
        //     'gioi_thieu' => $request->gioi_thieu,
        // ]);
        
        // dd($this_banner);
        $User_insert = new User();
        $User_insert->name = $request->name;
        $User_insert->email = $request->email;
        $User_insert->so_dien_thoai = $request->so_dien_thoai;
        $User_insert->dia_chi = $request->dia_chi;
        $User_insert->password = bcrypt($request->password);
        $User_insert->save();
       return redirect()->route('user-s.index');
    }

    public function edit($id)
    {
        // return $id;
        // dd($id);
        $user = User::findOrFail($id);
        return view('website.user.edit', compact('user'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $User_edit = User::findOrFail($id);


        // dd($request);

        // $ThietLap_edit->update([
        //     'logo' => $request->logo,
        //     'banner' => $request->banner,
        //     'link_lien_Ket' => $request->link_lien_Ket,
        //     'gioi_thieu' => $request->gioi_thieu,
        // ]);
        $User_edit->name = $request->name;
        $User_edit->email = $request->email;
        $User_edit->so_dien_thoai = $request->so_dien_thoai;
        $User_edit->dia_chi = $request->dia_chi;
        $User_edit->password = bcrypt($request->password);
        $User_edit->save();
        return redirect()->route('user-s.index');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('user.index');
    }

}
