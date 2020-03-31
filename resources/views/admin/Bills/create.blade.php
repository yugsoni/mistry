@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('global.bill.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.bills.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.bill.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($bill) ? $bill->name : '') }}">
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
                <label for="name">{{ trans('global.bill.fields.mobileNo') }}*</label>
                <input type="text" id="mobileNo" name="mobileNo" class="form-control" value="{{ old('mobileNo', isset($bill) ? $bill->mobileNo : '') }}">
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
                <label for="name">{{ trans('global.bill.fields.GstNo') }}*</label>
                <input type="text" id="GstNo" name="GstNo" class="form-control" value="{{ old('GstNo', isset($bill) ? $bill->GstNo : '') }}">
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