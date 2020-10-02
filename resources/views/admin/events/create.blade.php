@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.events.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.event.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.event.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', '') }}">
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="information">{{ trans('cruds.event.fields.information') }}</label>
                <input class="form-control {{ $errors->has('information') ? 'is-invalid' : '' }}" type="text" name="information" id="information" value="{{ old('information', '') }}">
                @if($errors->has('information'))
                    <div class="invalid-feedback">
                        {{ $errors->first('information') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.information_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.event.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="how_many_people">{{ trans('cruds.event.fields.how_many_people') }}</label>
                <input class="form-control {{ $errors->has('how_many_people') ? 'is-invalid' : '' }}" type="number" name="how_many_people" id="how_many_people" value="{{ old('how_many_people', '') }}" step="1">
                @if($errors->has('how_many_people'))
                    <div class="invalid-feedback">
                        {{ $errors->first('how_many_people') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.how_many_people_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="location">{{ trans('cruds.event.fields.location') }}</label>
                <input class="form-control {{ $errors->has('location') ? 'is-invalid' : '' }}" type="text" name="location" id="location" value="{{ old('location', '') }}">
                @if($errors->has('location'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.location_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_information">{{ trans('cruds.event.fields.contact_information') }}</label>
                <input class="form-control {{ $errors->has('contact_information') ? 'is-invalid' : '' }}" type="text" name="contact_information" id="contact_information" value="{{ old('contact_information', '') }}">
                @if($errors->has('contact_information'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_information') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.contact_information_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="starts">{{ trans('cruds.event.fields.starts') }}</label>
                <input class="form-control datetime {{ $errors->has('starts') ? 'is-invalid' : '' }}" type="text" name="starts" id="starts" value="{{ old('starts') }}">
                @if($errors->has('starts'))
                    <div class="invalid-feedback">
                        {{ $errors->first('starts') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.starts_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ends">{{ trans('cruds.event.fields.ends') }}</label>
                <input class="form-control datetime {{ $errors->has('ends') ? 'is-invalid' : '' }}" type="text" name="ends" id="ends" value="{{ old('ends') }}">
                @if($errors->has('ends'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ends') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.event.fields.ends_helper') }}</span>
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