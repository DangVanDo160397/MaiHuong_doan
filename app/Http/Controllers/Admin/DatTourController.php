<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\DatTour;


//  php artisan make:controller Admin/DiaDiemController
class DatTourController extends Controller
{
//

    

    // function index để show ra ds 
    public function index()
    {
        $dattour = DatTour::latest()->paginate();
        return view('website.dattour.index', compact('dattour'));
    }
    
    public function create()
    {
        return view('website.dattour.create');
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
        $DatTour_insert = new DatTour();
        $DatTour_insert->ngay_khoi_hanh = $request->ngay_khoi_hanh;
        $DatTour_insert->so_dien_thoai_KH = $request->so_dien_thoai_KH;
        $DatTour_insert->email_KH = $request->email_KH;
        $DatTour_insert->so_nguoi_lon = $request->so_nguoi_lon;
        $DatTour_insert->so_tre_em = $request->so_tre_em;
        $DatTour_insert->ma_tour = $request->ma_tour;
        $DatTour_insert->ma_tai_khoan = $request->ma_tai_khoan;
       
        $DatTour_insert->ma_thanh_toan = $request->ma_thanh_toan;
        $DatTour_insert->save();
       return redirect()->route('dat-tour.index');
    }

    public function edit($id)
    {
        // return $id;
        // dd($id);
        $dattour = DatTour::findOrFail($id);
        return view('website.dattour.edit', compact('dattour'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $DatTour_edit = DatTour::findOrFail($id);


        // dd($request);

        // $ThietLap_edit->update([
        //     'logo' => $request->logo,
        //     'banner' => $request->banner,
        //     'link_lien_Ket' => $request->link_lien_Ket,
        //     'gioi_thieu' => $request->gioi_thieu,
        // ]);
        $DatTour_edit->ngay_khoi_hanh = $request->ngay_khoi_hanh;
        $DatTour_edit->so_dien_thoai_KH = $request->so_dien_thoai_KH;
        $DatTour_edit->email_KH = $request->email_KH;
        $DatTour_edit->so_nguoi_lon = $request->so_nguoi_lon;
        $DatTour_edit->so_tre_em = $request->so_tre_em;
        $DatTour_edit->ma_tour = $request->ma_tour;
        $DatTour_edit->ma_tai_khoan = $request->ma_tai_khoan;
        $DatTour_edit->ma_thanh_toan = $request->ma_thanh_toan;
        $DatTour_edit->save();
        return redirect()->route('dat-tour.index');
    }

    public function destroy($id)
    {
        DatTour::findOrFail($id)->delete();
        return redirect()->route('dattour.index');
    }
}
