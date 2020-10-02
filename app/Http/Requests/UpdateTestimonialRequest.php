<?php

namespace App\Http\Requests;

use App\Models\Testimonial;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTestimonialRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('testimonial_edit');
    }

    public function rules()
    {
        return [
            'title'    => [
                'string',
                'required',
            ],
            'customer' => [
                'string',
                'nullable',
            ],
            'quote'    => [
                'string',
                'nullable',
            ],
        ];
    }
}
