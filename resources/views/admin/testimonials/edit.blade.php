@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.testimonial.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.testimonials.update", [$testimonial->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.testimonial.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $testimonial->title) }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="customer">{{ trans('cruds.testimonial.fields.customer') }}</label>
                <input class="form-control {{ $errors->has('customer') ? 'is-invalid' : '' }}" type="text" name="customer" id="customer" value="{{ old('customer', $testimonial->customer) }}">
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="quote">{{ trans('cruds.testimonial.fields.quote') }}</label>
                <input class="form-control {{ $errors->has('quote') ? 'is-invalid' : '' }}" type="text" name="quote" id="quote" value="{{ old('quote', $testimonial->quote) }}">
                @if($errors->has('quote'))
                    <div class="invalid-feedback">
                        {{ $errors->first('quote') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.testimonial.fields.quote_helper') }}</span>
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