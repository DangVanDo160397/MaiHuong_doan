<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DiaDiem;

//  php artisan make:controller Admin/DiaDiemController
class DiaDiemController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $diadiem = DiaDiem::latest()->paginate();
        return view('website.diadiem.index', compact('diadiem'));
    }
    
    public function create()
    {
        return view('website.diadiem.create');
    }

    public function store(Request $request)
    {
        // return $request->chi_tiet_dia_diem;
        // DiaDiem::create($request-all());
        DiaDiem::create([
            // tên cột => giá trị name ở input
            'ten_dia_diem' => $request->ten_dia_diem,
            'tinh_thanh' => $request->tinh_thanh,
            'quoc_gia' => $request->quoc_gia,
            'chi_tiet_dia_diem' => $request->chi_tiet_dia_diem,
        ]);
        return redirect()->route('dia-diem.index');
    }

    public function edit($id)
    {
        // return $id;
        $diadiem = DiaDiem::findOrFail($id);
        return view('website.diadiem.edit', compact('diadiem'));
    }

    public function update($id, Request $request)
    {
        $diadiem = DiaDiem::findOrFail($id);

        $diadiem->update([
            'ten_dia_diem' => $request->ten_dia_diem,
            'tinh_thanh' => $request->tinh_thanh,
            'quoc_gia' => $request->quoc_gia,
            'chi_tiet_dia_diem' => $request->chi_tiet_dia_diem,
        ]);
        return redirect()->route('dia-diem.index');
    }

    public function destroy($id)
    {
        DiaDiem::findOrFail($id)->delete();
        return redirect()->route('dia-diem.index');

    }
}
