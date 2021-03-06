<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveProductsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name.0' => 'required',
            'content.0' => 'required',
            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'name.0.required' => 'Vui lòng nhập tên sản phẩm ',
            'content.0.required' => 'Vui lòng nhập mô tả sản phẩm ',
            'fileToUpload.required' => 'Vui lòng chọn hình ảnh',
            'fileToUpload.mimes' => 'Vui lòng chọn hình lại định dạng file ảnh',
        ];

    }

}

