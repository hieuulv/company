<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditNewsRequest extends Request
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
//            'fileToUpload' => 'required | mimes:jpeg,jpg,png'
        ];
    }

    public function messages()
    {
        return [
            'title_news.required' => 'Vui l���ng nh?p t���n tin t?c ',
            'content_news.required' => 'Vui l���ng nh?p m��� t? tin t?c ',
//            'fileToUpload.required' => 'Vui l���ng ch?n h���nh ?nh ���?i di?n cho s?n ph?m',
//            'fileToUpload.mimes' => 'Vui l���ng ch?n h���nh l?i ���?nh d?ng file ?nh',
        ];

    }

}

