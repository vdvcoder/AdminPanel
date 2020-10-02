@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.couponCode.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coupon-codes.update", [$couponCode->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="code">{{ trans('cruds.couponCode.fields.code') }}</label>
                <input class="form-control {{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" name="code" id="code" value="{{ old('code', $couponCode->code) }}" required>
                @if($errors->has('code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.couponCode.fields.code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reward">{{ trans('cruds.couponCode.fields.reward') }}</label>
                <input class="form-control {{ $errors->has('reward') ? 'is-invalid' : '' }}" type="number" name="reward" id="reward" value="{{ old('reward', $couponCode->reward) }}" step="0.01">
                @if($errors->has('reward'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reward') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.couponCode.fields.reward_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="quantity">{{ trans('cruds.couponCode.fields.quantity') }}</label>
                <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}" type="number" name="quantity" id="quantity" value="{{ old('quantity', $couponCode->quantity) }}" step="1" required>
                @if($errors->has('quantity'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quantity') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.couponCode.fields.quantity_helper') }}</span>
            </div>
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_disposable') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_disposable" value="0">
                    <input class="form-check-input" type="checkbox" name="is_disposable" id="is_disposable" value="1" {{ $couponCode->is_disposable || old('is_disposable', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_disposable">{{ trans('cruds.couponCode.fields.is_disposable') }}</label>
                </div>
                @if($errors->has('is_disposable'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_disposable') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.couponCode.fields.is_disposable_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="used_at">{{ trans('cruds.couponCode.fields.used_at') }}</label>
                <input class="form-control datetime {{ $errors->has('used_at') ? 'is-invalid' : '' }}" type="text" name="used_at" id="used_at" value="{{ old('used_at', $couponCode->used_at) }}">
                @if($errors->has('used_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('used_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.couponCode.fields.used_at_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="expires_at">{{ trans('cruds.couponCode.fields.expires_at') }}</label>
                <input class="form-control datetime {{ $errors->has('expires_at') ? 'is-invalid' : '' }}" type="text" name="expires_at" id="expires_at" value="{{ old('expires_at', $couponCode->expires_at) }}">
                @if($errors->has('expires_at'))
                    <div class="invalid-feedback">
                        {{ $errors->first('expires_at') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.couponCode.fields.expires_at_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection