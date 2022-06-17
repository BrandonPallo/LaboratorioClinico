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
        <style>
            .demo {
                width:100%;
                height:100%;
                border:1px sólido #000000;
                border-collapse:colapso;
                padding:14px;
            }
            .demo th {
                border:1px sólido #000000;
                padding:14px;
                background:#E4EE9B;
            }
            .demo td {
                border:1px sólido #000000;
                padding:14px;
                text-align: center;
            }
        </style>
        <table class="demo">
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.name') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.company') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->name }}
                    </td>
                    <td>
                        {{ $service->company }}
                    </td>
                </tr>	
            </thead>
        </table>
        <table class="demo">
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_engineer') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.date') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.csr') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->service_engineer }}
                    </td>
                    <td>
                        {{ $service->date }}
                    </td>
                    <td>
                        {{ $service->csr }}
                    </td>
                </tr>	
            </thead>
        </table>
        <table class="demo">
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.company_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.company_2') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->company_1 }}
                    </td>
                    <td>
                        {{ $service->company_2 }}
                    </td>
                </tr>	
            </thead>
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.addres_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.addres_2') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->addres_1 }}
                    </td>
                    <td>
                        {{ $service->addres_2 }}
                    </td>
                </tr>	
            </thead>
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.site_contact') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.attention') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->site_contact }}
                    </td>
                    <td>
                        {{ $service->attention }}
                    </td>
                </tr>	
            </thead>
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.phone_1') }}
                    </th>
                    <th>
                        {{ trans('cruds.service.fields.phone_2') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->phone_1 }}
                    </td>
                    <td>
                        {{ $service->phone_2 }}
                    </td>
                </tr>	
            </thead>
        </table>
        <table class="demo">
            <thead>
                <tr>
                    <th>
                        {{ trans('cruds.service.fields.service_request_1') }}
                    </th>
                </tr>
                <tr>
                    <td>
                        {{ $service->service_request }}
                    </td>
                </tr>	
            </thead>
        </table>
        
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
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.services.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
            <a href="{{url('generate-pdf/' . $service->id)}}"  class="btn-sm btn-red">Exportar PDF</a>
        </div>
    </div>
</div>
@endsection
