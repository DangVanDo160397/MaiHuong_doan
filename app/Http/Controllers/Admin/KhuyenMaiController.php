<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\KhuyenMai;

//  php artisan make:controller Admin/DiaDiemController
class KhuyenMaiController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $khuyenmai = KhuyenMai::latest()->paginate();
        return view('website.khuyenmai.index', compact('khuyenmai'));
    }
    
    public function create()
    {
        return view('website.khuyenmai.create');
    }

    public function store(Request $request)
    {
        // dd(KhuyenMai::all());
        // return $request->chi_tiet_dia_diem;
        // DiaDiem::create($request-all());
        // KhuyenMai::create([
        //     // tên cột => giá trị name ở input
        //     'gia_KM' => $request->gia_KM,
        //     'chi_tiet_KM' => $request->chi_tiet_KM,
        // ]);
        $KM_insert = new KhuyenMai;
        $KM_insert->gia_KM = $request->gia_KM;
        $KM_insert->chi_tiet_KM = $request->chi_tiet_KM;
        $KM_insert->save();
        return redirect()->route('khuyen-mai.index');
    }

    public function edit($id)
    {
        // return $id;
        // dd($id);
        $khuyenmai = KhuyenMai::findOrFail($id);
        return view('website.khuyenmai.edit', compact('khuyenmai'));
    }

    public function update($id, Request $request)
    {
        $khuyenmai = KhuyenMai::findOrFail($id);

        $khuyenmai->update([
            'gia_KM' => $request->gia_KM,
            'chi_tiet_KM' => $request->chi_tiet_KM,
        ]);
        return redirect()->route('khuyen-mai.index');
    }

    public function destroy($id)
    {
        KhuyenMai::findOrFail($id)->delete();
        return redirect()->route('khuyen-mai.index');

    }
}
