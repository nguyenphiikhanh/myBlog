<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            "name" => "bail|required|unique:tags|max:100",
            'tag_content' => "required"
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tag không được để trống.',
            'name.unique' => 'Tag đã tồn tại.',
            'name.max' => 'không vượt quá 80 kí tự.',
            'tag_content.required' => 'Nội dung tag không được để trống.',


        ];
    }
}
