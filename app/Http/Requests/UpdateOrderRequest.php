<?php

namespace App\Http\Requests;

use App\Models\Order;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrderRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('order_edit');
    }

    public function rules()
    {
        return [
            'uuid'           => [
                'string',
                'nullable',
            ],
            'order'          => [
                'string',
                'nullable',
            ],
            'payment_method' => [
                'string',
                'nullable',
            ],
            'payment'        => [
                'string',
                'nullable',
            ],
            'paid_at'        => [
                'string',
                'nullable',
            ],
        ];
    }
}
