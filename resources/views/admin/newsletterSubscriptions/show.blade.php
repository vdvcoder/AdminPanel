@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newsletterSubscription.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newsletter-subscriptions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletterSubscription.fields.id') }}
                        </th>
                        <td>
                            {{ $newsletterSubscription->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletterSubscription.fields.name') }}
                        </th>
                        <td>
                            {{ $newsletterSubscription->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newsletterSubscription.fields.email') }}
                        </th>
                        <td>
                            {{ $newsletterSubscription->email }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newsletter-subscriptions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection