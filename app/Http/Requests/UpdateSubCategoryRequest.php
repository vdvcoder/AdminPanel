<?php

namespace App\Http\Requests;

use App\Models\SubCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSubCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sub_category_edit');
    }

    public function rules()
    {
        return [
            'title'     => [
                'string',
                'nullable',
            ],
            'parents.*' => [
                'integer',
            ],
            'parents'   => [
                'array',
            ],
        ];
    }
}
