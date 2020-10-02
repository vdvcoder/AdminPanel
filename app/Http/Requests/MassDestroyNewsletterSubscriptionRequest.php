<?php

namespace App\Http\Requests;

use App\Models\NewsletterSubscription;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyNewsletterSubscriptionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('newsletter_subscription_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:newsletter_subscriptions,id',
        ];
    }
}
