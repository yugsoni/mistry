@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('global.bill.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.bills.update", [$Bill->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.bill.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($Bill) ? $Bill->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.bill.fields.name_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('mobileNo') ? 'has-error' : '' }}">
                <label for="mobileNo">{{ trans('global.bill.fields.mobileNo') }}*</label>
                <input type="text" id="mobileNo" name="mobileNo" class="form-control" value="{{ old('mobileNo', isset($Bill) ? $Bill->mobileNo : '') }}">
                @if($errors->has('mobileNo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('mobileNo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.bill.fields.mobileNo_helper') }}
                </p>
            </div>
             <div class="form-group {{ $errors->has('GstNo') ? 'has-error' : '' }}">
                <label for="GstNo">{{ trans('global.bill.fields.GstNo') }}*</label>
                <input type="text" id="GstNo" name="GstNo" class="form-control" value="{{ old('GstNo', isset($Bill) ? $Bill->GstNo : '') }}">
                @if($errors->has('GstNo'))
                    <em class="invalid-feedback">
                        {{ $errors->first('GstNo') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.bill.fields.GstNo_helper') }}
                </p>
            </div>
           
          
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection