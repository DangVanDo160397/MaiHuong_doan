<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\ThietLap;

//  php artisan make:controller Admin/DiaDiemController
class ThietLapController extends Controller
{
    // function index để show ra ds 
    public function index()
    {
        $thietlap = ThietLap::latest()->paginate();
        return view('website.thietlap.index', compact('thietlap'));
    }
    
    public function create()
    {
        return view('website.thietlap.create');
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
        $this_logos;
        $this_banner;
        $_un_num  =0;
        if ($request->hasFile('logo')) {
            $_files = $request->file('logo');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
            $this_logos = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_logos);
            $_un_num++;
        }
        if ($request->hasFile('banner')) {
            $_files = $request->file('banner');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
            $this_banner = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_banner);
            $_un_num++;
        }
        // dd($this_banner);
        $ThietLap_insert = new ThietLap();
        $ThietLap_insert->logo = $this_logos;
        $ThietLap_insert->banner = $this_banner;
        $ThietLap_insert->link_lien_Ket = $request->link_lien_Ket;
        $ThietLap_insert->gioi_thieu = $request->gioi_thieu;
        $ThietLap_insert->save();
       return redirect()->route('thiet-lap.index');
    }

    public function edit($id)
    {
        // return $id;
        // dd($id);
        $thietlap = ThietLap::findOrFail($id);
        return view('website.thietlap.edit', compact('thietlap'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $ThietLap_edit = ThietLap::findOrFail($id);

        $this_logos;
        $this_banner;
        $_un_num  =0;
        if ($request->hasFile('logo')) {
            File::delete($ThietLap_edit->logo);
            $_files = $request->file('logo');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
            $this_logos = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_logos);
            $_un_num++;
        }else{
            $this_logos = $ThietLap_edit->logo;
        }
        if ($request->hasFile('banner')) {
            File::delete($ThietLap_edit->banner);
            $_files = $request->file('banner');
            $name_files = explode(".",$_files->getClientOriginalName())[0];
            $this_banner = 'uploads/'.$name_files.'-'.time().$_un_num.'.'.$_files->getClientOriginalExtension();
            $_files->move('uploads',$this_banner);
            $_un_num++;
        }else{
            $this_banner = $ThietLap_edit->banner;
        }

        // dd($request);

        // $ThietLap_edit->update([
        //     'logo' => $request->logo,
        //     'banner' => $request->banner,
        //     'link_lien_Ket' => $request->link_lien_Ket,
        //     'gioi_thieu' => $request->gioi_thieu,
        // ]);
        $ThietLap_edit->logo = $this_logos;
        $ThietLap_edit->banner = $this_banner;
        $ThietLap_edit->link_lien_Ket = $request->link_lien_Ket;
        $ThietLap_edit->gioi_thieu = $request->gioi_thieu;
        $ThietLap_edit->save();
        return redirect()->route('thiet-lap.index');
    }

    public function destroy($id)
    {
        ThietLap::findOrFail($id)->delete();
        return redirect()->route('thiet-lap.index');

    }
}
