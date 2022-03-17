@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.project.title')}}
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.projects.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">
            <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.id') }}
                    </th>
                    <td>
                        {{ $project->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.name') }}
                    </th>
                    <td>
                        {{ $project->name }}
                    </td>
                </tr>

                <tr>
                    <th>
                        {{ trans('cruds.project.fields.revisado') }}
                    </th>
                    <td>
                        {{ $project->revisado }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.informe') }}
                    </th>
                    <td>
                        {{ $project->informe }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.felaboracion') }}
                    </th>
                    <td>
                        {{ $project->felaboracion }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.frevision') }}
                    </th>
                    <td>
                        {{ $project->frevision }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.rev') }}
                    </th>
                    <td>
                        {{ $project->rev }}
                    </td>
                </tr>
                <tr>
                    {{-- <th>
                        {{ trans('cruds.project.fields.hoja') }}
                    </th>
                    <td>
                        {{ $project->hoja }}
                    </td>
                </tr> --}}
            </tbody>
{{-- datos empresa --}}
            <tbody>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.empresa') }}
                    </th>
                    <td>
                        {{ $project->empresa }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.proyecto') }}
                    </th>
                    <td>
                        {{ $project->proyecto }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.codigo_proy') }}
                    </th>
                    <td>
                        {{ $project->codigo_proy }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.ubicacion') }}
                    </th>
                    <td>
                        {{ $project->ubicacion }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.fentrega') }}
                    </th>
                    <td>
                        {{ $project->fentrega }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.documento') }}
                    </th>
                    <td>
                        {{ $project->documento }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.revisado_por') }}
                    </th>
                    <td>
                        {{ $project->revisado_por }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('cruds.project.fields.nombre_documento') }}
                    </th>
                    <td>
                        {{ $project->nombre_documento }}
                    </td>
                </tr>


                <tr>
                    <th>
                        {{ trans('cruds.project.fields.users') }}
                    </th>
                    <td>
                        @foreach($project->users as $key => $users)
                            <span class="label label-info">{{ $users->name }}</span>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.projects.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
            <a href="{{url('generate-docx/' . $project->id)}}"  class="btn-sm btn-blue">Exportar Word</a>
        </div>
    </div>
</div>
@endsection
