@extends('layouts.admin')
@section('content')
{{dd($BillItem->name)}}
<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('global.billitem.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.billitems.update", [$BillItem->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label for="name">{{ trans('global.billitem.fields.name') }}*</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($BillItem) ? $BillItem->name : '') }}">
                @if($errors->has('name'))
                    <em class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.billitem.fields.name_helper') }}
                </p>
            </div>
       
        
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection