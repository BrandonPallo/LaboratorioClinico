@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.project.title')}}
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.roadmaps.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
            <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.id') }}
                    </th>
                    <td>
                        {{ $roadmap->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.day') }}
                    </th>
                    <td>
                        {{ $roadmap->day }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.start_time') }}
                    </th>
                    <td>
                        {{ $roadmap->start_time }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.out_time') }}
                    </th>
                    <td>
                        {{ $roadmap->out_time }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.start_time') }}
                    </th>
                    <td>
                        {{ $roadmap->start_time }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.end_time') }}
                    </th>
                    <td>
                        {{ $roadmap->end_time }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.in_time') }}
                    </th>
                    <td>
                        {{ $roadmap->in_time }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.labor') }}
                    </th>
                    <td>
                        {{ $roadmap->labor }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.travel') }}
                    </th>
                    <td>
                        {{ $roadmap->travel }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.standby') }}
                    </th>
                    <td>
                        {{ $roadmap->standby }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.porcentaje') }}
                    </th>
                    <td>
                        {{ $roadmap->porcentaje }}
                    </td>
                </tr>
            </tbody>


            
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.roadmaps.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
            <a href="{{url('generate-pdf/' . $roadmap->id)}}"  class="btn-sm btn-red">Exportar PDF</a>
        </div>
    </div>
</div>
@endsection
