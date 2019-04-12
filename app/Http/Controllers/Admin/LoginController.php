<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\QuanTri\LoginQuanTriRequest;
use Auth;
use Session;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admins')->except('logout');
    }
    public function getDangnhapAdmin()
    {
        return view('homepage.auth.login_Admin');
    }

    public function postDangnhapAdmin(LoginQuanTriRequest $request)
    {
        
        // $this->validate($request,[
        //     'so_dien_thoai'=> 'required',
        //     'password'=> 'required',
        // ],[
        //     'so_dien_thoai.required'=> 'Bạn chưa nhập số điện thoại', 
        //     'password.required'=> 'Bạn chưa nhập mật khẩu',
        //     'password.min'=> 'Mật khẩu không được nhỏ hơn 6 ký tự',
        // ]
        // );
        // if(Auth::attempt(['so_dien_thoai'=>$request->so_dien_thoai,'password'=>$request->password]))
        // {
        //     return redirect('/admin');
        // }
        // else
        // {
        //     return redirect('/dangnhap')->with('thong bao','Dăng nhập không thành công');
        // }
        
        // return $request->all();
        $loginInfo = [
            'so_dien_thoai' => $request->so_dien_thoai, 
            'password' => $request->password
        ];
        // dd($loginInfo);
        if (Auth::guard('admins')->attempt($loginInfo, $request->input('remember', false))) {
    		Session::flash('success', 'Đăng nhập thành công.');
            return redirect()->route('dat-tour.index');
    	}
        
    }

    public function logout(){
        Auth::guard('admins')->logout();
        return redirect()->route('admin.login');
    }
}
