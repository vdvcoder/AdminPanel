@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.couponCode.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.coupon-codes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.id') }}
                        </th>
                        <td>
                            {{ $couponCode->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.code') }}
                        </th>
                        <td>
                            {{ $couponCode->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.reward') }}
                        </th>
                        <td>
                            {{ $couponCode->reward }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.quantity') }}
                        </th>
                        <td>
                            {{ $couponCode->quantity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.is_disposable') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $couponCode->is_disposable ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.used_at') }}
                        </th>
                        <td>
                            {{ $couponCode->used_at }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.couponCode.fields.expires_at') }}
                        </th>
                        <td>
                            {{ $couponCode->expires_at }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.coupon-codes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection