<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\Admin\LoginAdminRequest;
use Illuminate\Http\Request;
use App\Http\Requests\Website\LoginWebsiteRequest;
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
        $this->middleware('guest:web')->except('logout');
    }

    public function getLogin()
    {
        return view('homepage.auth.login');
    }

    public function postLogin(LoginWebsiteRequest  $request)
    {
        $loginInfo = [
            'so_dien_thoai' => $request->so_dien_thoai, 
            'password' => $request->password
        ];
        // dd($loginInfo);
        if (Auth::attempt($loginInfo, $request->input('remember', false))) {
    		Session::flash('success', 'Đăng nhập thành công.');
            return redirect()->route('homepage');
           
    	}
        // return back()->withInput($request->only('phone', 'remember'));
    }
    
    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('homepage');
    }
}
