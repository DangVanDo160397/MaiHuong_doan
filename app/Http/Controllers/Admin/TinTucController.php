<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\TinTuc;

//  php artisan make:controller Admin/DiaDiemController
class TinTucController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $tintuc = TinTuc::latest()->paginate();
        return view('website.tintuc.index', compact('tintuc'));
    }
    
    public function create()
    {
        return view('website.tintuc.create');
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
        
        $this_hinhanhs;
        $_un_num  =0;
        if ($request->hasFile('hinh_anh_tin_tuc')) {
            $_files = $request->file('hinh_anh_tin_tuc');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
           $this_hinhanhs = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_hinhanhs);
            $_un_num++;
        }
        
        // dd($this_banner);
        $TinTuc_insert = new TinTuc();
        $TinTuc_insert->tieu_de_tin_tuc = $request->tieu_de_tin_tuc;
        $TinTuc_insert->hinh_anh_tin_tuc = $this_hinhanhs;
        $TinTuc_insert->noi_dung_tin_tuc = $request->noi_dung_tin_tuc;
        $TinTuc_insert->loai_tin_tuc = $request->loai_tin_tuc;
        $TinTuc_insert->ma_dia_diem = $request->ma_dia_diem;
        $TinTuc_insert->save();
       return redirect()->route('tin-tuc.index');
    }

    public function edit($id)
    {
        // return $id;
        // dd($id);
        $tintuc = TinTuc::findOrFail($id);
        return view('website.tintuc.edit', compact('tintuc'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $TinTuc_edit = TinTuc::findOrFail($id);

        $this_hinhanhs;
       
        $_un_num  =0;
        if ($request->hasFile('hinh_anh_tin_tuc')) {
            File::delete($TinTuc_edit->hinh_anh_tin_tuc);
            $_files = $request->file('hinh_anh_tin_tuc');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
            $this_hinhanhs = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_hinhanhs);
            $_un_num++;
        }else{
            $this_hinhanhs = $TinTuc_edit->hinh_anh_tin_tuc;
        }
        

        // dd($request);

        // $ThietLap_edit->update([
        //     'logo' => $request->logo,
        //     'banner' => $request->banner,
        //     'link_lien_Ket' => $request->link_lien_Ket,
        //     'gioi_thieu' => $request->gioi_thieu,
        // ]);
        $TinTuc_edit->tieu_de_tin_tuc = $request->tieu_de_tin_tuc;
        $TinTuc_edit->hinh_anh_tin_tuc= $this_hinhanhs;
        $TinTuc_edit->noi_dung_tin_tuc = $request->noi_dung_tin_tuc;
        $TinTuc_edit->loai_tin_tuc = $request->loai_tin_tuc;
        $TinTuc_edit->ma_dia_diem = $request->ma_dia_diem;
        $TinTuc_edit->save();
        return redirect()->route('tin-tuc.index');
    }

    public function destroy($id)
    {
        TinTuc::findOrFail($id)->delete();
        return redirect()->route('tin-tuc.index');

    }
}
