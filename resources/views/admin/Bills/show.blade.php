@extends('layouts.admin') 
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.bill.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.bill.fields.name') }}
                    </th>
                    <td>
                        {{ $Bill->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.bill.fields.mobileNo') }}
                    </th>
                    <td>
                        {{ $Bill->mobileNo }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.bill.fields.GstNo') }}
                    </th>
                    <td>
                        {{ $Bill->GstNo }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.bill.fields.total') }}
                    </th>
                    <td>
                        {{ $Bill->total }}
                    </td>
                </tr>
              
                <tr>
                    <th>
                        {{ trans('global.bill.fields.updated_at') }}
                    </th>
                    <td>
                        {{ $Bill->updated_at }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection