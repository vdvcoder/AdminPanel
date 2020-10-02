<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNewsletterSubscriptionRequest;
use App\Http\Requests\StoreNewsletterSubscriptionRequest;
use App\Http\Requests\UpdateNewsletterSubscriptionRequest;
use App\Models\NewsletterSubscription;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class NewsletterSubscriptionsController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('newsletter_subscription_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = NewsletterSubscription::query()->select(sprintf('%s.*', (new NewsletterSubscription)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'newsletter_subscription_show';
                $editGate      = 'newsletter_subscription_edit';
                $deleteGate    = 'newsletter_subscription_delete';
                $crudRoutePart = 'newsletter-subscriptions';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : "";
            });
            $table->editColumn('email', function ($row) {
                return $row->email ? $row->email : "";
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.newsletterSubscriptions.index');
    }

    public function create()
    {
        abort_if(Gate::denies('newsletter_subscription_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsletterSubscriptions.create');
    }

    public function store(StoreNewsletterSubscriptionRequest $request)
    {
        $newsletterSubscription = NewsletterSubscription::create($request->all());

        return redirect()->route('admin.newsletter-subscriptions.index');
    }

    public function edit(NewsletterSubscription $newsletterSubscription)
    {
        abort_if(Gate::denies('newsletter_subscription_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsletterSubscriptions.edit', compact('newsletterSubscription'));
    }

    public function update(UpdateNewsletterSubscriptionRequest $request, NewsletterSubscription $newsletterSubscription)
    {
        $newsletterSubscription->update($request->all());

        return redirect()->route('admin.newsletter-subscriptions.index');
    }

    public function show(NewsletterSubscription $newsletterSubscription)
    {
        abort_if(Gate::denies('newsletter_subscription_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newsletterSubscriptions.show', compact('newsletterSubscription'));
    }

    public function destroy(NewsletterSubscription $newsletterSubscription)
    {
        abort_if(Gate::denies('newsletter_subscription_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newsletterSubscription->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewsletterSubscriptionRequest $request)
    {
        NewsletterSubscription::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
