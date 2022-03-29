@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.roadmap.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.roadmaps.store") }}" enctype="multipart/form-data">
        @csrf
        <div class="body">
            <div class="header">
                <h1>DATA</h1>
            </div>
            {{-- formulario hoja de ruta --}}
            <div class="mb-3">
                <label for="day" class="text-xs required">{{ trans('cruds.roadmap.fields.day') }}</label>
                <div class="form-group">
                    <input type="text" id="day" name="day" class="{{ $errors->has('day') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('day',$now->format('l')) }}" required>
                </div>
                @if($errors->has('day'))
                    <p class="invalid-feedback">{{ $errors->first('day') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.day_helper') }}</span>
            </div>
{{-- datos --}}            
            <div class="mb-3">
                <label for="date" class="text-xs required">{{ trans('cruds.roadmap.fields.date') }}</label>

                <div class="form-group">
                    <input type="text" id="date" name="date" class="{{ $errors->has('date') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('date', $now->format('Y-m-d')) }}" required>
                </div>
                @if($errors->has('date'))
                    <p class="invalid-feedback">{{ $errors->first('date') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.date_helper') }}</span>
            </div>

            <div class="mb-3">
                
                <label for="out_time" class="text-xs required">{{ trans('cruds.roadmap.fields.out_time') }}</label>

                <div class="form-group">
                    <input type="text" id="out_time" name="out_time" class="{{ $errors->has('out_time') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('out_time', $now->format('H:i:s')) }}" required>
                </div>
                @if($errors->has('out_time'))
                    <p class="invalid-feedback">{{ $errors->first('out_time') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.out_time_helper') }}</span>
                <div class="block my-4">
                <a class="btn-md btn-green" id="btn1" href=""> 
                    {{ trans('global.add') }} {{ trans('cruds.roadmap.title_singular') }}
                </a>
                <script>
                    $("#btn1").click(function () {
                        $("#out_time").val("10");
                    });     
                </script>
            </div>
            </div>

            <div class="mb-3">
                <label for="start_time" class="text-xs required">{{ trans('cruds.roadmap.fields.start_time') }}</label>

                <div class="form-group">
                    <input type="start_time" id="start_time" name="start_time" class="{{ $errors->has('start_time') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('start_time',$now->format('H:i:s')) }}" required>
                </div>
                @if($errors->has('start_time'))
                    <p class="invalid-feedback">{{ $errors->first('start_time') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.start_time_helper') }}</span>
                <div class="block my-4">
                <a class="btn-md btn-green" href="{{ route('admin.roadmaps.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.roadmap.title_singular') }}
                </a>
            </div>
            </div>   

            <div class="mb-3">
                <label for="end_time" class="text-xs required">{{ trans('cruds.roadmap.fields.end_time') }}</label>

                <div class="form-group">
                    <input type="text" id="end_time" name="end_time" class="{{ $errors->has('end_time') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('end_time' , $now->format('H:i:s')) }}" required>
                </div>
                @if($errors->has('end_time'))
                    <p class="invalid-feedback">{{ $errors->first('end_time') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.end_time_helper') }}</span>
                <div class="block my-4">
                <a class="btn-md btn-green" href="{{ route('admin.roadmaps.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.roadmap.title_singular') }}
                </a>
            </div>
            </div>
            <div class="mb-3">
                <label for="in_time" class="text-xs required">{{ trans('cruds.roadmap.fields.in_time') }}</label>

                <div class="form-group">
                    <input type="text" id="in_time" name="in_time" class="{{ $errors->has('in_time') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('in_time' , $now->format('H:i:s')) }}" required>
                </div>
                @if($errors->has('in_time'))
                    <p class="invalid-feedback">{{ $errors->first('in_time') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.in_time_helper') }}</span>
                <div class="block my-4">
                <a class="btn-md btn-green" href="{{ route('admin.roadmaps.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.roadmap.title_singular') }}
                </a>
            </div>
            </div>
           
{{-- users --}}
            <!-- <div class="mb-3">
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
            </div> -->
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection
