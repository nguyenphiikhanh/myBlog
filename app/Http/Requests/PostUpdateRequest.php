<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            'name' => "bail|required|max:300|min:10",
            'category_id' => "required",
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tiêu đề bài viết.',
            'name.max' => 'không vượt quá 200 kí tự.',
            'name.min' => 'Tiêu đề bài viết không được ít hơn 10 kí tự',
            "category_id.required" => 'Vui lòng chọn một danh mục',
        ];
    }
}
