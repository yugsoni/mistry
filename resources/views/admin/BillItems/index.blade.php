@extends('layouts.admin')
@section('content')
@can('BillItems_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.billitems.create") }}">
                {{ trans('global.add') }} {{ trans('global.billitem.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('global.billitem.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('global.billitem.fields.name') }}
                        </th>
                       
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($BillItems as $key => $BillItem)
                        <tr data-entry-id="{{ $BillItem->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $BillItem->name ?? '' }}
                            </td>
                          
                            <td>
                                @can('BillItems_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.billitems.show', $BillItem->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan
                                @can('BillItems_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.billitems.edit', $BillItem->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan
                                @can('BillItems_delete')
                                    <form action="{{ route('admin.billitems.destroy', $BillItem->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    url: "{{ route('admin.billitems.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('BillItems_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
@endsection
@endsection