@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.roadmap.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.roadmaps.update", [$roadmap->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="body">
            <div class="header">
                <h1>DATOS</h1>
            </div>
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.roadmap.fields.name') }}</label>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $roadmap->name) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.name_helper') }}</span>
            </div>



            {{-- datos --}}
            <div class="mb-3">
                <label for="company" class="text-xs required">{{ trans('cruds.roadmap.fields.company') }}</label>

                <div class="form-group">
                    <input type="text" id="company" name="company" class="{{ $errors->has('company') ? ' is-invalid' : '' }}" value="{{ old('company', $roadmap->company) }}" required>
                </div>
                @if($errors->has('company'))
                    <p class="invalid-feedback">{{ $errors->first('company') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.company_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="roadmap_engineer" class="text-xs required">{{ trans('cruds.roadmap.fields.roadmap_engineer') }}</label>

                <div class="form-group">
                    <input type="text" id="roadmap_engineer" name="roadmap_engineer" class="{{ $errors->has('roadmap_engineer') ? ' is-invalid' : '' }}" value="{{ old('roadmap_engineer', $roadmap->roadmap_engineer) }}" required>
                </div>
                @if($errors->has('roadmap_engineer'))
                    <p class="invalid-feedback">{{ $errors->first('roadmap_engineer') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.roadmap_engineer_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="date" class="text-xs required">{{ trans('cruds.roadmap.fields.date') }}</label>

                <div class="form-group">
                    <input type="date" id="date" name="date" class="{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date', $roadmap->date) }}" required>
                </div>
                @if($errors->has('date'))
                    <p class="invalid-feedback">{{ $errors->first('date') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.date_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="csr" class="text-xs required">{{ trans('cruds.roadmap.fields.csr') }}</label>

                <div class="form-group">
                    <input type="text" id="csr" name="csr" class="{{ $errors->has('csr') ? ' is-invalid' : '' }}" value="{{ old('csr', $roadmap->csr) }}" required>
                </div>
                @if($errors->has('csr'))
                    <p class="invalid-feedback">{{ $errors->first('csr') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.csr_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="company_1" class="text-xs required">{{ trans('cruds.roadmap.fields.company_1') }}</label>

                <div class="form-group">
                    <input type="text" id="company_1" name="company_1" class="{{ $errors->has('company_1') ? ' is-invalid' : '' }}" value="{{ old('company_1', $roadmap->company_1) }}" required>
                </div>
                @if($errors->has('company_1'))
                    <p class="invalid-feedback">{{ $errors->first('company_1') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.company_1_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="company_2" class="text-xs required">{{ trans('cruds.roadmap.fields.company_2') }}</label>

                <div class="form-group">
                    <input type="text" id="company_2" name="company_2" class="{{ $errors->has('company_2') ? ' is-invalid' : '' }}" value="{{ old('company_2', $roadmap->company_2) }}" required>
                </div>
                @if($errors->has('company_2'))
                    <p class="invalid-feedback">{{ $errors->first('company_2') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.company_2_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="addres_1" class="text-xs required">{{ trans('cruds.roadmap.fields.addres_1') }}</label>

                <div class="form-group">
                    <input type="text" id="addres_1" name="addres_1" class="{{ $errors->has('addres_1') ? ' is-invalid' : '' }}" value="{{ old('addres_1', $roadmap->addres_1) }}" required>
                </div>
                @if($errors->has('addres_1'))
                    <p class="invalid-feedback">{{ $errors->first('addres_1') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.addres_1_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="addres_2" class="text-xs required">{{ trans('cruds.roadmap.fields.addres_2') }}</label>

                <div class="form-group">
                    <input type="text" id="addres_2" name="addres_2" class="{{ $errors->has('addres_2') ? ' is-invalid' : '' }}" value="{{ old('addres_2', $roadmap->addres_2) }}" required>
                </div>
                @if($errors->has('addres_2'))
                    <p class="invalid-feedback">{{ $errors->first('addres_2') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.addres_2_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="site_contact" class="text-xs required">{{ trans('cruds.roadmap.fields.site_contact') }}</label>

                <div class="form-group">
                    <input type="text" id="site_contact" name="site_contact" class="{{ $errors->has('site_contact') ? ' is-invalid' : '' }}" value="{{ old('site_contact', $roadmap->site_contact) }}" required>
                </div>
                @if($errors->has('site_contact'))
                    <p class="invalid-feedback">{{ $errors->first('site_contact') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.site_contact_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="attention" class="text-xs required">{{ trans('cruds.roadmap.fields.attention') }}</label>

                <div class="form-group">
                    <input type="text" id="attention" name="attention" class="{{ $errors->has('attention') ? ' is-invalid' : '' }}" value="{{ old('attention', $roadmap->attention) }}" required>
                </div>
                @if($errors->has('attention'))
                    <p class="invalid-feedback">{{ $errors->first('attention') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.attention_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="phone_1" class="text-xs required">{{ trans('cruds.roadmap.fields.phone_1') }}</label>

                <div class="form-group">
                    <input type="text" id="phone_1" name="phone_1" class="{{ $errors->has('phone_1') ? ' is-invalid' : '' }}" value="{{ old('phone_1', $roadmap->phone_1) }}" required>
                </div>
                @if($errors->has('phone_1'))
                    <p class="invalid-feedback">{{ $errors->first('phone_1') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.phone_1_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="phone_2" class="text-xs required">{{ trans('cruds.roadmap.fields.phone_2') }}</label>

                <div class="form-group">
                    <input type="text" id="phone_2" name="phone_2" class="{{ $errors->has('phone_2') ? ' is-invalid' : '' }}" value="{{ old('phone_2', $roadmap->phone_2) }}" required>
                </div>
                @if($errors->has('phone_2'))
                    <p class="invalid-feedback">{{ $errors->first('phone_2') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.phone_2_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="roadmap_request" class="text-xs required">{{ trans('cruds.roadmap.fields.roadmap_request') }}</label>

                <div class="form-group">
                    <input type="text" id="roadmap_request" name="roadmap_request" class="{{ $errors->has('roadmap_request') ? ' is-invalid' : '' }}" value="{{ old('roadmap_request', $roadmap->roadmap_request) }}" required>
                </div>
                @if($errors->has('roadmap_request'))
                    <p class="invalid-feedback">{{ $errors->first('roadmap_request') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.roadmap_request_helper') }}</span>
            </div>
{{-- users --}}
            <div class="mb-3">
                <label for="users" class="text-xs">{{ trans('cruds.roadmap.fields.users') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('users') ? ' is-invalid' : '' }}" name="users[]" id="users" multiple>
                    @foreach($users as $id => $users)
                        <option value="{{ $id }}" {{ (in_array($id, old('users', [])) || $roadmap->users->contains($id)) ? 'selected' : '' }}>{{ $users }}</option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                    <p class="invalid-feedback">{{ $errors->first('users') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.users_helper') }}</span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection