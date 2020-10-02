<?php

namespace App\Http\Requests;

use App\Models\News;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('news_edit');
    }

    public function rules()
    {
        return [
            'title'        => [
                'string',
                'required',
                'unique:news,title,' . request()->route('news')->id,
            ],
            'description'  => [
                'string',
                'nullable',
            ],
            'slug'         => [
                'string',
                'required',
                'unique:news,slug,' . request()->route('news')->id,
            ],
            'categories.*' => [
                'integer',
            ],
            'categories'   => [
                'array',
            ],
        ];
    }
}
