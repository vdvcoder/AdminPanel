<?php

namespace App\Http\Requests;

use App\Models\NewsletterSubscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewsletterSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('newsletter_subscription_edit');
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
