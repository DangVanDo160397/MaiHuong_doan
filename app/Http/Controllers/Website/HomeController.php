<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tour;
use App\TinTuc;
use App\DatTour;
use App\ThanhToan;
use App\DiaDiem;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function homepage(Request $request)
    {
        $tenDiaDiem = $request->query('tenDiaDiem', NULL);
        $tours = Tour::query();
        if ($tenDiaDiem != NULL) {
            $tours = $tours->SearchDiaDiem($tenDiaDiem);
        }
        $tours = $tours->get();
        return view('homepage.home', compact('tours'));
        // $dia_diem = DiaDiem::all();
        // return view('homepage.home', compact('dia_diem'));

    }

    public function viewDetailTour($id)
    {
        $tour = Tour::find($id);
        return view('homepage.pages.detail_tour', compact('tour'));
    }

    public function camLangDuLich()
    {
        
        // $tenDiaDiem = $request->query('tenDiaDiem', NULL);
       // $tintuc = TinTuc::query();
       // if ($tenDiaDiem != NULL) {
       //     $tintuc = $tintuc->SearchDiaDiem($tenDiaDiem);
       // }
       // $tintuc= $tintuc->get();

        $tintuc = TinTuc::all();
        return view('homepage.pages.camLangDuLich', compact('tintuc'));
    }

    public function xemCamLangDuLich($id)
    {
        $tintuc = TinTuc::findOrFail($id);
        return view('homepage.pages.detailTinTuc', compact('tintuc'));
    }

    public function datTour($id)
    {
        $dattour = DatTour::findOrFail($id);
        return view('homepage.pages.dat_tour', compact('dattour'));
    }


    public function thanhToan($id)
    {
        // $thanhtoan = ThanhToan::findOrFail($id);
        // return $id;
        $tour = Tour::findOrFail($id);
        // return $tour;
        return view('homepage.pages.thanh_toan', compact('tour'));
    }

    public function postThanhToan(Request $request)
    {
        DatTour::create($request->all());
        return redirect()->route('homepage');
    }

    public function viewThanhToan($id)
    {
        $thanhtoan = ThanhToan::findOrFail($id);
        return view('homepage.pages.thanh_toan', compact('thanhtoan'));
    }

   

    
   // public function taiKhoanCuaToi()
   // {
   //     return view('homepage.pages.tkct');
   // }

    public function gioiThieu()
    {
        return view('homepage.pages.gioithieu');
    }

    public function lienHe()
    {
        return view('homepage.pages.lienHe');
    }

    public function taiKhoan()
    {
       
      $dattour = DatTour::where("ma_tai_khoan", Auth::user()->id)->get();
      //return view('homepage.pages.taiKhoan', compact('dattour'));
    return view('homepage.pages.taiKhoan',compact('dattour'));

       // $tour = User::find();
       // return view('homepage.pages.taiKhoan', compact('tour'));
    }

    public function troGiup()
    {
        return view('homepage.pages.troGiup');
    }

    public function veChungToi()
    {
        return view('homepage.pages.veChungToi');
    }

    public function cauHoiThuongGap()
    {
        return view('homepage.pages.cauHoiThuongGap');
    }

    public function dieuKhoanVaBaoMat()
    {
        return view('homepage.pages.dieuKhoanVaBaoMat');
    }

    public function dieuKien()
    {
        return view('homepage.pages.dieuKien');
    }

    public function dangKy()
    {
        return view('homepage.pages.dangKy');
    }

    public function postdangKy(Request $request)
    { 
        $request->validate([
            'so_dien_thoai' => 'required|numeric|digits_between:9,11',
            'email' => 'required|email',
            'name' => 'required',
            'password' => 'required',
            'crfpassword'=> 'same:password'
        ]);

        $data = [
            'so_dien_thoai' => $request->so_dien_thoai,
            'email' => $request->email,
            'name' => $request->name,
            'dia_chi' => $request->dia_chi,
            'password' => Hash::make($request->password),
            'remember_token' => $request->_token
        ];
        $user = User::create($data);
        return redirect()->route('getLogin')->with('thongbao','Đăng ký thành công.');
    }
    
    public function StoreThanhToan(Request $request)
    {
       // dd("ftt");
        
        if($request->chuyenkhoan == '11')
        {
            $chuyen_khoan = 1;
        }
        else if($request->chuyenkhoan == '12')
        {
            $chuyen_khoan = 2;
        }
        $tuor = Tour::find($request->tour_id);
        $gia_tre_em = $tuor->gia_tre_em*$request->so_tre_em;
        $gia_nguoi_lon = $tuor->gia_nguoi_lon*$request->so_nguoi_lon;
        $gia_tien = $gia_nguoi_lon+$gia_tre_em;
        
        $dattour = DatTour::create([
            'ngay_khoi_hanh' => $request->ngay_khoi_hanh,
            'so_dien_thoai_KH' => Auth::user()->so_dien_thoai,
            'email_KH' => Auth::user()->email,
            'so_nguoi_lon' => $request->so_nguoi_lon,
            'so_tre_em' => $request->so_tre_em,
            'gia_tien' => $gia_tien,
            'ma_tour' => $request->tour_id,
            'ma_tai_khoan' =>Auth::user()->id,
            'ma_thanh_toan' => $chuyen_khoan
        ]);

        return redirect()->route('homepage');
    }
}
