<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DichVu;

//  php artisan make:controller Admin/DiaDiemController
class DichVuController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $dichvu = DichVu::latest()->paginate();
        return view('website.dichvu.index', compact('dichvu'));
    }
    
    public function create()
    {
        return view('website.dichvu.create');
    }

    public function store(Request $request)
    {
        // return $request->chi_tiet_dia_diem;
        // DiaDiem::create($request-all());
        DichVu::create([
            // tên cột => giá trị name ở input
            'ten_dich_vu' => $request->ten_dich_vu,
            'gia_dich_vu' => $request->gia_dich_vu,
            'chi_tiet_dich_vu' => $request->chi_tiet_dich_vu,
        ]);
        return redirect()->route('dich-vu.index');
    }

    public function edit($id)
    {
        // return $id;
        $dichvu = DichVu::findOrFail($id);
        return view('website.dichvu.edit', compact('dichvu'));//Lỗi này là đẩy tên sai nhá(dich-vu)
    }

    public function update($id, Request $request)
    {
        $dichvu = DichVu::findOrFail($id);

        $dichvu->update([
            'ten_dich_vu' => $request->ten_dich_vu,
            'gia_dich_vu' => $request->gia_dich_vu,
            'chi_tiet_dich_vu' => $request->chi_tiet_dich_vu,
        ]);
        return redirect()->route('dich-vu.index');
    }

    public function destroy($id)
    {
        DichVu::findOrFail($id)->delete();
        return redirect()->route('dich-vu.index');

    }
}
