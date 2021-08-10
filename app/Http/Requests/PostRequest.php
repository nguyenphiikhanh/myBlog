<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => "bail|required|unique:posts|max:300|min:10",
            'category_id' => "required",
            'thumnail_image_path' =>"required",
            'content' =>"required"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tiêu đề bài viết.',
            'name.unique' => 'Bài viết đã tồn tại.',
            'name.max' => 'không vượt quá 200 kí tự.',
            'name.min' => 'Tiêu đề bài viết không được ít hơn 10 kí tự',
            "category_id.required" => 'Vui lòng chọn một danh mục',
            'thumnail_image_path.required' =>"Vui lòng tải lên một hình ảnh.",
            "content.required" => "Nội dung bài viết không được để trống.",
        ];
    }
}
