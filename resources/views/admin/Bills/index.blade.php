@extends('layouts.admin')
@section('content')
@can('bill_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.bills.create") }}">
                {{ trans('global.add') }} {{ trans('global.bill.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.bill.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.bill.fields.billNo') }}
                        </th>
                        <th>
                            {{ trans('global.bill.fields.name') }}
                        </th>
                        <th>
                            {{ trans('global.bill.fields.mobileNo') }}
                        </th>
                        <th>
                            {{ trans('global.bill.fields.GstNo') }}
                        </th>
                        <th>
                            {{ trans('global.bill.fields.total') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bills as $key => $bill)
                        <tr data-entry-id="{{ $bill->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $bill->id ?? '' }}
                            </td>
                            <td>
                                {{ $bill->name ?? '' }}
                            </td>
                            <td>
                                {{ $bill->mobileNo ?? '' }}
                            </td>
                            <td>
                                {{ $bill->GstNo ?? '' }}
                            </td>
                            <td>
                                {{ $bill->total ?? '' }}
                            </td>
                            <td>
                                @can('Bill_show')

                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.bills.show', $bill->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('Bill_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.bills.edit', $bill->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('Bill_delete')
                                    <form action="{{ route('admin.bills.destroy', $bill->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bills.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var id = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (id.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { id: id, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('Bill_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
@endsection