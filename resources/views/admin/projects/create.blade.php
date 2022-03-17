@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.project.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.projects.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="body">
            <div class="header">
                <h1>DATOS DEL ENCABEZADO</h1>
            </div>
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.project.fields.name') }}</label>
{{-- formulario encabezado --}}
                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.name_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="revisado" class="text-xs required">{{ trans('cruds.project.fields.revisado') }}</label>

                <div class="form-group">
                    <input type="text" id="revisado" name="revisado" class="{{ $errors->has('revisado') ? ' is-invalid' : '' }}" value="{{ old('revisado') }}" required>
                </div>
                @if($errors->has('revisado'))
                    <p class="invalid-feedback">{{ $errors->first('revisado') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.revisado_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="informe" class="text-xs required">{{ trans('cruds.project.fields.informe') }}</label>

                <div class="form-group">
                    <input type="text" id="informe" name="informe" class="{{ $errors->has('informe') ? ' is-invalid' : '' }}" value="{{ old('informe') }}" required>
                </div>
                @if($errors->has('informe'))
                    <p class="invalid-feedback">{{ $errors->first('informe') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.informe_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="felaboracion" class="text-xs required">{{ trans('cruds.project.fields.felaboracion') }}</label>

                <div class="form-group">
                    <input type="date" id="felaboracion" name="felaboracion" class="{{ $errors->has('felaboracion') ? ' is-invalid' : '' }}" value="{{ old('felaboracion') }}" required>
                </div>
                @if($errors->has('felaboracion'))
                    <p class="invalid-feedback">{{ $errors->first('felaboracion') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.felaboracion_helper') }}</span>
            </div>


            <div class="mb-3">
                <label for="frevision" class="text-xs required">{{ trans('cruds.project.fields.frevision') }}</label>

                <div class="form-group">
                    <input type="date" id="frevision" name="frevision" class="{{ $errors->has('frevision') ? ' is-invalid' : '' }}" value="{{ old('frevision') }}" required>
                </div>
                @if($errors->has('frevision'))
                    <p class="invalid-feedback">{{ $errors->first('frevision') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.frevision_helper') }}</span>
            </div>


            <div class="mb-3">
                <label for="rev" class="text-xs required">{{ trans('cruds.project.fields.rev') }}</label>

                <div class="form-group">
                    <input type="text" id="rev" name="rev" class="{{ $errors->has('rev') ? ' is-invalid' : '' }}" value="{{ old('rev') }}" required>
                </div>
                @if($errors->has('rev'))
                    <p class="invalid-feedback">{{ $errors->first('rev') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.rev_helper') }}</span>
            </div>

            {{-- <div class="mb-3">
                <label for="hoja" class="text-xs required">{{ trans('cruds.project.fields.hoja') }}</label>

                <div class="form-group">
                    <input type="text" id="hoja" name="hoja" class="{{ $errors->has('hoja') ? ' is-invalid' : '' }}" value="{{ old('hoja') }}" required>
                </div>
                @if($errors->has('hoja'))
                    <p class="invalid-feedback">{{ $errors->first('hoja') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.hoja_helper') }}</span>
            </div> --}}


{{-- formulario de datos empresa --}}
            <div class="header">
                <h1>DATOS DEL PROYECTO</h1>
            </div>
            <div class="mb-3">
                <label for="empresa" class="text-xs required">{{ trans('cruds.project.fields.empresa') }}</label>

                <div class="form-group">
                    <input type="text" id="empresa" name="empresa" class="{{ $errors->has('empresa') ? ' is-invalid' : '' }}" value="{{ old('empresa') }}" required>
                </div>
                @if($errors->has('empresa'))
                    <p class="invalid-feedback">{{ $errors->first('empresa') }}</p>
                @endif

            </div>

            <div class="mb-3">
                <label for="proyecto" class="text-xs required">{{ trans('cruds.project.fields.proyecto') }}</label>

                <div class="form-group">
                    <input type="text" id="proyecto" name="proyecto" class="{{ $errors->has('proyecto') ? ' is-invalid' : '' }}" value="{{ old('proyecto') }}" required>
                </div>
                @if($errors->has('proyecto'))
                    <p class="invalid-feedback">{{ $errors->first('proyecto') }}</p>
                @endif

            </div>


            <div class="mb-3">
                <label for="codigo_proy" class="text-xs required">{{ trans('cruds.project.fields.codigo_proy') }}</label>

                <div class="form-group">
                    <input type="text" id="codigo_proy" name="codigo_proy" class="{{ $errors->has('codigo_proy') ? ' is-invalid' : '' }}" value="{{ old('codigo_proy') }}" required>
                </div>
                @if($errors->has('codigo_proy'))
                    <p class="invalid-feedback">{{ $errors->first('codigo_proy') }}</p>
                @endif

            </div>


            <div class="mb-3">
                <label for="ubicacion" class="text-xs required">{{ trans('cruds.project.fields.ubicacion') }}</label>

                <div class="form-group">
                    <input type="text" id="ubicacion" name="ubicacion" class="{{ $errors->has('ubicacion') ? ' is-invalid' : '' }}" value="{{ old('ubicacion') }}" required>
                </div>
                @if($errors->has('ubicacion'))
                    <p class="invalid-feedback">{{ $errors->first('ubicacion') }}</p>
                @endif

            </div>


            <div class="mb-3">
                <label for="fentrega" class="text-xs required">{{ trans('cruds.project.fields.fentrega') }}</label>

                <div class="form-group">
                    <input type="date" id="fentrega" name="fentrega" class="{{ $errors->has('fentrega') ? ' is-invalid' : '' }}" value="{{ old('fentrega') }}" required>
                </div>
                @if($errors->has('fentrega'))
                    <p class="invalid-feedback">{{ $errors->first('fentrega') }}</p>
                @endif

            </div>

            <div class="mb-3">
                <label for="documento" class="text-xs required">{{ trans('cruds.project.fields.documento') }}</label>

                <div class="form-group">
                    <input type="text" id="documento" name="documento" class="{{ $errors->has('documento') ? ' is-invalid' : '' }}" value="{{ old('documento') }}" required>
                </div>
                @if($errors->has('documento'))
                    <p class="invalid-feedback">{{ $errors->first('documento') }}</p>
                @endif

            </div>

            <div class="mb-3">
                <label for="revisado_por" class="text-xs required">{{ trans('cruds.project.fields.revisado_por') }}</label>

                <div class="form-group">
                    <input type="text" id="revisado_por" name="revisado_por" class="{{ $errors->has('revisado_por') ? ' is-invalid' : '' }}" value="{{ old('revisado_por') }}" required>
                </div>
                @if($errors->has('revisado_por'))
                    <p class="invalid-feedback">{{ $errors->first('revisado_por') }}</p>
                @endif

            </div>

            <div class="mb-3">
                <label for="nombre_documento" class="text-xs required">{{ trans('cruds.project.fields.nombre_documento') }}</label>

                <div class="form-group">
                    <input type="text" id="nombre_documento" name="nombre_documento" class="{{ $errors->has('nombre_documento') ? ' is-invalid' : '' }}" value="{{ old('nombre_documento') }}" required>
                </div>
                @if($errors->has('nombre_documento'))
                    <p class="invalid-feedback">{{ $errors->first('nombre_documento') }}</p>
                @endif

            </div>


            <div class="mb-3">
                <label for="users" class="text-xs">{{ trans('cruds.project.fields.users') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('users') ? ' is-invalid' : '' }}" name="users[]" id="users" multiple>
                    @foreach($users as $id => $users)
                        <option value="{{ $id }}" {{ in_array($id, old('users', [])) ? 'selected' : '' }}>{{ $users }}</option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                    <p class="invalid-feedback">{{ $errors->first('users') }}</p>
                @endif
                <span class="block">{{ trans('cruds.project.fields.users_helper') }}</span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection
