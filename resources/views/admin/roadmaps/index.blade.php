@extends('layouts.admin')
@section('content')
@can('roadmap_create')
    <div class="block my-4">
        <a class="btn-md btn-green" href="{{ route('admin.roadmaps.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.roadmap.title_singular') }}
        </a>
    </div>
@endcan
<div class="main-card">
    <div class="header">
        {{ trans('cruds.roadmap.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="body">
        <div class="w-full">
            <table class="stripe hover bordered datatable datatable-RoadMap">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.roadmap.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.roadmap.fields.date') }}
                        </th>
                        <!-- {{-- <th>
                            {{ trans('cruds.project.fields.users') }}
                        </th> --}} -->
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roadmaps as $key => $roadmap)
                        <tr data-entry-id="{{ $roadmap->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $roadmap->id ?? '' }}
                            </td>
                            <td>
                                {{ $roadmap->date ?? '' }}
                            </td>
                            <!-- {{-- <td>
                                @foreach($project->users as $key => $item)
                                    <span class="badge blue">{{ $item->name }}</span>
                                @endforeach
                            </td> --}} -->
                            <td>
                                @can('roadmap_show')
                                    <a class="btn-sm btn-indigo" href="{{ route('admin.roadmaps.show', $roadmap->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('roadmap_edit')
                                    <a class="btn-sm btn-blue" href="{{ route('admin.roadmaps.edit', $roadmap->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('roadmap_delete')
                                    <form action="{{ route('admin.roadmaps.destroy', $roadmap->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn-sm btn-red" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                                <a href="{{url('generate-pdf/' . $roadmap->id)}}"  class="btn-sm btn-red">Exportar PDF</a>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('roadmap_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.roadmaps.massDestroy') }}",
    className: 'btn-red',
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
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-RoadMap:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
