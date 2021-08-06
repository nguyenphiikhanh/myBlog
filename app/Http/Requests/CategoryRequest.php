<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'bail|required|unique:categories|max:80',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'Tên danh mục không được để trống.',
        'name.unique' => 'Danh mục đã tồn tại.',
        'name.max' => 'Tên danh mục không vượt quá 80 kí tự.',
    ];
}
}
