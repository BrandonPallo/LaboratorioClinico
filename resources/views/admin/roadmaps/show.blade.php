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
                        {{ trans('cruds.roadmap.fields.name') }}
                    </th>
                    <td>
                        {{ $roadmap->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.company') }}
                    </th>
                    <td>
                        {{ $roadmap->company }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.roadmap_engineer') }}
                    </th>
                    <td>
                        {{ $roadmap->roadmap_engineer }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.date') }}
                    </th>
                    <td>
                        {{ $roadmap->date }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.csr') }}
                    </th>
                    <td>
                        {{ $roadmap->csr }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.company_1') }}
                    </th>
                    <td>
                        {{ $roadmap->company_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.company_2') }}
                    </th>
                    <td>
                        {{ $roadmap->company_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.addres_1') }}
                    </th>
                    <td>
                        {{ $roadmap->addres_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.addres_2') }}
                    </th>
                    <td>
                        {{ $roadmap->addres_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.site_contact') }}
                    </th>
                    <td>
                        {{ $roadmap->site_contact }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.attention') }}
                    </th>
                    <td>
                        {{ $roadmap->attention }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.phone_1') }}
                    </th>
                    <td>
                        {{ $roadmap->phone_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.phone_2') }}
                    </th>
                    <td>
                        {{ $roadmap->phone_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.roadmap_request_1') }}
                    </th>
                    <td>
                        {{ $roadmap->roadmap_request }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.roadmap_request_2') }}
                    </th>
                    <td>
                        {{ $roadmap->roadmap_request_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.roadmap_request_3') }}
                    </th>
                    <td>
                        {{ $roadmap->roadmap_request_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.roadmap_request_4') }}
                    </th>
                    <td>
                        {{ $roadmap->roadmap_request_3 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.roadmap.fields.roadmap_request_5') }}
                    </th>
                    <td>
                        {{ $roadmap->roadmap_request_4 }}
                    </td>
                </tr>
            </tbody>
{{-- users --}}

            <!-- <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.users') }}
                    </th>
                    <td>
                        @foreach($roadmap->users as $key => $users)
                            <span class="label label-info">{{ $users->name }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody> -->
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
