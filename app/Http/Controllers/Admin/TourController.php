<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Tour;

//  php artisan make:controller Admin/DiaDiemController
class TourController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $tour = Tour::latest()->paginate();
        return view('website.tour.index', compact('tour'));
    }
    
    public function create()
    {
        return view('website.tour.create');
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
        
        $this_hinhanhtour;
        $_un_num  =0;
        if ($request->hasFile('hinh_anh')) {
            $_files = $request->file('hinh_anh');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
           $this_hinhanhtour = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_hinhanhtour);
            $_un_num++;
        }
        
        // dd($this_banner);
        $Tour_T_insert = new Tour();
        $Tour_T_insert->ten_tour = $request->ten_tour;
        $Tour_T_insert->hinh_anh = $this_hinhanhtour;
        $Tour_T_insert->so_ngay = $request->so_ngay;
        $Tour_T_insert->so_cho = $request->so_cho;
        $Tour_T_insert->gia_nguoi_lon = $request->gia_nguoi_lon;
        $Tour_T_insert->gia_tre_em = $request->gia_tre_em;
        $Tour_T_insert->chi_tiet_tour= $request->chi_tiet_tour;
        $Tour_T_insert->ma_dich_vu = $request->ma_dich_vu;
        $Tour_T_insert->ma_khuyen_mai = $request->ma_khuyen_mai;
        $Tour_T_insert->ma_dia_diem = $request->ma_dia_diem;
        $Tour_T_insert->loai_tour= $request->loai_tour;
        $Tour_T_insert->save();
       return redirect()->route('tour-tour.index');
    }

    public function edit($id)
    {
        // return $id;
        // dd($id);
        $tour = Tour::findOrFail($id);
        return view('website.tour.edit', compact('tour'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $Tour_T_edit = Tour::findOrFail($id);

        $this_hinhanhtour;
       
        $_un_num  =0;
        if ($request->hasFile('hinh_anh')) {
            File::delete($Tour_T_edit->hinh_anh);
            $_files = $request->file('hinh_anh');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
            $this_hinhanhtour = 'uploads/'.$name_files.'-'.timehinh_anh().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_hinhanhtour);
            $_un_num++;
        }else{
            $this_hinhanhtour = $Tour_T_edit->hinh_anh;
        }
        

        // dd($request);

        // $ThietLap_edit->update([
        //     'logo' => $request->logo,
        //     'banner' => $request->banner,
        //     'link_lien_Ket' => $request->link_lien_Ket,
        //     'gioi_thieu' => $request->gioi_thieu,
        // ]);
        $Tour_T_edit->ten_tour = $request->ten_tour;
        $Tour_T_edit->hinh_anh = $this_hinhanhtour;
        $Tour_T_edit->so_ngay = $request->so_ngay;
        $Tour_T_edit->so_cho = $request->so_cho;
        $Tour_T_edit->gia_nguoi_lon = $request->gia_nguoi_lon;
        $Tour_T_edit->gia_tre_em = $request->gia_tre_em;
        $Tour_T_edit->chi_tiet_tour= $request->chi_tiet_tour;
        $Tour_T_edit->ma_dich_vu = $request->ma_dich_vu;;
        $Tour_T_edit->ma_khuyen_mai = $request->ma_khuyen_mai;
        $Tour_T_edit->ma_dia_diem = $request->ma_dia_diem;
        $Tour_T_edit->loai_tour= $request->loai_tour;
        return redirect()->route('tour-tour.index');
    }

    public function destroy($id)
    {
        Tour::findOrFail($id)->delete();
        return redirect()->route('tour-tour.index');

    }
}
