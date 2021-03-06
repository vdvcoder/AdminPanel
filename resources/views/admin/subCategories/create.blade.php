@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.subCategory.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sub-categories.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">{{ trans('cruds.subCategory.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}">
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subCategory.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="parents">{{ trans('cruds.subCategory.fields.parent') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('parents') ? 'is-invalid' : '' }}" name="parents[]" id="parents" multiple>
                    @foreach($parents as $id => $parent)
                        <option value="{{ $id }}" {{ in_array($id, old('parents', [])) ? 'selected' : '' }}>{{ $parent }}</option>
                    @endforeach
                </select>
                @if($errors->has('parents'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parents') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.subCategory.fields.parent_helper') }}</span>
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