<?php

namespace App\Http\Requests;

use App\Models\NewsletterSubscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNewsletterSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('newsletter_subscription_create');
    }

    public function rules()
    {
        return [
            'name'  => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
        ];
    }
}
