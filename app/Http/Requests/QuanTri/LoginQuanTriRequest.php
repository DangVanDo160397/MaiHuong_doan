<?php

namespace App\Http\Requests\QuanTri;

use Illuminate\Foundation\Http\FormRequest;
use App\Admin;
use Hash;

class LoginQuanTriRequest extends FormRequest
{
    /**
     * Determine if the admin is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'so_dien_thoai' => 'bail|required|exists:admins,so_dien_thoai',
            'password' => 'required'
        ];
    }
    
    
    public function withValidator($validator){
        // if($validator->fails()) return;
        $validator->after(function($validator){
            $admin = Admin::where('so_dien_thoai', request('so_dien_thoai'))->first();
            // dd($admin);
            if(!Hash::check(request('password'), $admin->password)){
                $validator->errors()->add('password', 'Mật khẩu không chính xác.');
                return;
            }
        });
    }
}
