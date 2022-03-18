@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.project.title')}}
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.services.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
            <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.id') }}
                    </th>
                    <td>
                        {{ $service->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.name') }}
                    </th>
                    <td>
                        {{ $service->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('cruds.service.fields.company') }}
                    </th>
                    <td>
                        {{ $service->company }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_engineer') }}
                    </th>
                    <td>
                        {{ $service->service_engineer }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.date') }}
                    </th>
                    <td>
                        {{ $service->date }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.csr') }}
                    </th>
                    <td>
                        {{ $service->csr }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.company_1') }}
                    </th>
                    <td>
                        {{ $service->company_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.company_2') }}
                    </th>
                    <td>
                        {{ $service->company_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.addres_1') }}
                    </th>
                    <td>
                        {{ $service->addres_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.addres_2') }}
                    </th>
                    <td>
                        {{ $service->addres_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.site_contact') }}
                    </th>
                    <td>
                        {{ $service->site_contact }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.attention') }}
                    </th>
                    <td>
                        {{ $service->attention }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.phone_1') }}
                    </th>
                    <td>
                        {{ $service->phone_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.phone_2') }}
                    </th>
                    <td>
                        {{ $service->phone_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_request_1') }}
                    </th>
                    <td>
                        {{ $service->service_request }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_request_2') }}
                    </th>
                    <td>
                        {{ $service->service_request_1 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_request_3') }}
                    </th>
                    <td>
                        {{ $service->service_request_2 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_request_4') }}
                    </th>
                    <td>
                        {{ $service->service_request_3 }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_request_5') }}
                    </th>
                    <td>
                        {{ $service->service_request_4 }}
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
                        @foreach($service->users as $key => $users)
                            <span class="label label-info">{{ $users->name }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody> -->
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.services.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
            <a href="{{url('generate-pdf/' . $service->id)}}"  class="btn-sm btn-red">Exportar PDF</a>
        </div>
    </div>
</div>
@endsection
