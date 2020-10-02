<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewsletterSubscriptionRequest;
use App\Http\Requests\UpdateNewsletterSubscriptionRequest;
use App\Http\Resources\Admin\NewsletterSubscriptionResource;
use App\Models\NewsletterSubscription;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewsletterSubscriptionsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('newsletter_subscription_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewsletterSubscriptionResource(NewsletterSubscription::all());
    }

    public function store(StoreNewsletterSubscriptionRequest $request)
    {
        $newsletterSubscription = NewsletterSubscription::create($request->all());

        return (new NewsletterSubscriptionResource($newsletterSubscription))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(NewsletterSubscription $newsletterSubscription)
    {
        abort_if(Gate::denies('newsletter_subscription_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewsletterSubscriptionResource($newsletterSubscription);
    }

    public function update(UpdateNewsletterSubscriptionRequest $request, NewsletterSubscription $newsletterSubscription)
    {
        $newsletterSubscription->update($request->all());

        return (new NewsletterSubscriptionResource($newsletterSubscription))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(NewsletterSubscription $newsletterSubscription)
    {
        abort_if(Gate::denies('newsletter_subscription_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsletterSubscription->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
