<?php

namespace App\Http\Requests;

use App\Models\CouponCode;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCouponCodeRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('coupon_code_create');
    }

    public function rules()
    {
        return [
            'code'       => [
                'string',
                'min:32',
                'max:32',
                'required',
                'unique:coupon_codes',
            ],
            'quantity'   => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'used_at'    => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
            'expires_at' => [
                'date_format:' . config('panel.date_format') . ' ' . config('panel.time_format'),
                'nullable',
            ],
        ];
    }
}
