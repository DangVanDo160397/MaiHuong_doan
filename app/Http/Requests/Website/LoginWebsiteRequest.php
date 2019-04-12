<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use Hash;

class LoginWebsiteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'so_dien_thoai' => 'bail|required|exists:users,so_dien_thoai',
            'password' => 'required|min:6'
        ];
    }
    
    
    public function withValidator($validator){
        if($validator->fails()) return;
        $validator->after(function($validator){
            $user = User::where('so_dien_thoai', request('so_dien_thoai'))->first();
            // dd(request('so_dien_thoai'));
            
            if(!Hash::check(request('password'), $user->password)){
                $validator->errors()->add('password', 'Mật khẩu không chính xác.');
                return;
            }
        });
    }
}
