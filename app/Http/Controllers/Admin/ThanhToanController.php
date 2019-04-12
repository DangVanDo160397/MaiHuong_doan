<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ThanhToan;

//  php artisan make:controller Admin/DiaDiemController
class ThanhToanController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $thanhtoan = ThanhToan::latest()->paginate();
        return view('website.thanhtoan.index', compact('thanhtoan'));
    }
    
    public function create()
    {
        return view('website.thanhtoan.create');
    }

    public function store(Request $request)
    {
        // return $request->chi_tiet_dia_diem;
        // DiaDiem::create($request-all());
        ThanhToan::create([
            // tên cột => giá trị name ở input
            'loai_thanh_toan' => $request->loai_thanh_toan,
            'ten_hop_dong' => $request->ten_hop_dong,
            'chi_tiet_hop_dong' => $request->chi_tiet_hop_dong,
        ]);
        return redirect()->route('thanh-toan.index');
    }

    public function edit($id)
    {
        // return $id;
        $thanhtoan = ThanhToan::findOrFail($id);
        return view('website.thanhtoan.edit', compact('thanhtoan'));
    }

    public function update($id, Request $request)
    {
        $thanhtoan = ThanhToan::findOrFail($id);

        $thanhtoan->update([
            'loai_thanh_toan' => $request->loai_thanh_toan,
            'ten_hop_dong' => $request->ten_hop_dong,
            'chi_tiet_hop_dong' => $request->chi_tiet_hop_dong,
        ]);
        return redirect()->route('thanh-toan.index');
    }

    public function destroy($id)
    {
        ThanhToan::findOrFail($id)->delete();
        return redirect()->route('thanh-toan.index');

    }
}
