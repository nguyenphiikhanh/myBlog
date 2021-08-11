<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegUserRequest extends FormRequest
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
            //
            "username" => "bail|required|unique:users|min:5|max:50",
            "password" =>"required",
            "name"=>"required",
            "email" =>"bail|required|unique:users",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập đầy đủ họ tên.',
            'username.unique' => 'User đã tồn tại trên hệ thống.',
            'username.max' => 'không vượt quá 50 kí tự.',
            'username.min' => 'username phải nhiều hơn 5 ký tự.',
            'username.required' => 'Vui lòng nhập username.',
            'password.required' => 'Vui lòng nhập mật khẩu.',

            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.unique' => 'Địa chỉ email đã được sử dụng.',


        ];
    }
}
