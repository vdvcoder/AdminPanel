<?php

namespace App\Http\Requests;

use App\Models\News;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNewsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('news_create');
    }

    public function rules()
    {
        return [
            'title'        => [
                'string',
                'required',
                'unique:news',
            ],
            'description'  => [
                'string',
                'nullable',
            ],
            'slug'         => [
                'string',
                'required',
                'unique:news',
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
