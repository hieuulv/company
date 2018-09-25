<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaveNewsRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {

        return [
            'title_news' => 'required',
            'content_news' => 'required',
            'select_cate_news' => 'required',
            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'title_news.required' => 'Vui l���ng nh?p t���n tin t?c ',
            'select_cate_news.required' => 'Vui l���ng nh?p danh muc tin t?c ',
            'content_news.required' => 'Vui l���ng nh?p m��� t? tin t?c  ',
            'fileToUpload.required' => 'Vui l���ng ch?n h���nh ?nh ���?i di?n cho tin t?c ',
            'fileToUpload.mimes' => 'Vui l���ng ch?n h���nh l?i ���?nh d?ng file ?nh',
        ];

    }

}

