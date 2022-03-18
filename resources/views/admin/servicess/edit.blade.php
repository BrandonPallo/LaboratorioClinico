@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.service.title_singular') }}
    </div>

    <form method="POST" action="{{ route("admin.services.update", [$service->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="body">
            <div class="header">
                <h1>DATOS</h1>
            </div>
            <div class="mb-3">
                <label for="name" class="text-xs required">{{ trans('cruds.service.fields.name') }}</label>

                <div class="form-group">
                    <input type="text" id="name" name="name" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', $service->name) }}" required>
                </div>
                @if($errors->has('name'))
                    <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.name_helper') }}</span>
            </div>



            {{-- datos --}}
            <div class="mb-3">
                <label for="company" class="text-xs required">{{ trans('cruds.service.fields.company') }}</label>

                <div class="form-group">
                    <input type="text" id="company" name="company" class="{{ $errors->has('company') ? ' is-invalid' : '' }}" value="{{ old('company', $service->company) }}" required>
                </div>
                @if($errors->has('company'))
                    <p class="invalid-feedback">{{ $errors->first('company') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.company_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="service_engineer" class="text-xs required">{{ trans('cruds.service.fields.service_engineer') }}</label>

                <div class="form-group">
                    <input type="text" id="service_engineer" name="service_engineer" class="{{ $errors->has('service_engineer') ? ' is-invalid' : '' }}" value="{{ old('service_engineer', $service->service_engineer) }}" required>
                </div>
                @if($errors->has('service_engineer'))
                    <p class="invalid-feedback">{{ $errors->first('service_engineer') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.service_engineer_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="date" class="text-xs required">{{ trans('cruds.service.fields.date') }}</label>

                <div class="form-group">
                    <input type="date" id="date" name="date" class="{{ $errors->has('date') ? ' is-invalid' : '' }}" value="{{ old('date', $service->date) }}" required>
                </div>
                @if($errors->has('date'))
                    <p class="invalid-feedback">{{ $errors->first('date') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.date_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="csr" class="text-xs required">{{ trans('cruds.service.fields.csr') }}</label>

                <div class="form-group">
                    <input type="text" id="csr" name="csr" class="{{ $errors->has('csr') ? ' is-invalid' : '' }}" value="{{ old('csr', $service->csr) }}" required>
                </div>
                @if($errors->has('csr'))
                    <p class="invalid-feedback">{{ $errors->first('csr') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.csr_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="company_1" class="text-xs required">{{ trans('cruds.service.fields.company_1') }}</label>

                <div class="form-group">
                    <input type="text" id="company_1" name="company_1" class="{{ $errors->has('company_1') ? ' is-invalid' : '' }}" value="{{ old('company_1', $service->company_1) }}" required>
                </div>
                @if($errors->has('company_1'))
                    <p class="invalid-feedback">{{ $errors->first('company_1') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.company_1_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="company_2" class="text-xs required">{{ trans('cruds.service.fields.company_2') }}</label>

                <div class="form-group">
                    <input type="text" id="company_2" name="company_2" class="{{ $errors->has('company_2') ? ' is-invalid' : '' }}" value="{{ old('company_2', $service->company_2) }}" required>
                </div>
                @if($errors->has('company_2'))
                    <p class="invalid-feedback">{{ $errors->first('company_2') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.company_2_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="addres_1" class="text-xs required">{{ trans('cruds.service.fields.addres_1') }}</label>

                <div class="form-group">
                    <input type="text" id="addres_1" name="addres_1" class="{{ $errors->has('addres_1') ? ' is-invalid' : '' }}" value="{{ old('addres_1', $service->addres_1) }}" required>
                </div>
                @if($errors->has('addres_1'))
                    <p class="invalid-feedback">{{ $errors->first('addres_1') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.addres_1_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="addres_2" class="text-xs required">{{ trans('cruds.service.fields.addres_2') }}</label>

                <div class="form-group">
                    <input type="text" id="addres_2" name="addres_2" class="{{ $errors->has('addres_2') ? ' is-invalid' : '' }}" value="{{ old('addres_2', $service->addres_2) }}" required>
                </div>
                @if($errors->has('addres_2'))
                    <p class="invalid-feedback">{{ $errors->first('addres_2') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.addres_2_helper') }}</span>
            </div>

            <div class="mb-3">
                <label for="site_contact" class="text-xs required">{{ trans('cruds.service.fields.site_contact') }}</label>

                <div class="form-group">
                    <input type="text" id="site_contact" name="site_contact" class="{{ $errors->has('site_contact') ? ' is-invalid' : '' }}" value="{{ old('site_contact', $service->site_contact) }}" required>
                </div>
                @if($errors->has('site_contact'))
                    <p class="invalid-feedback">{{ $errors->first('site_contact') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.site_contact_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="attention" class="text-xs required">{{ trans('cruds.service.fields.attention') }}</label>

                <div class="form-group">
                    <input type="text" id="attention" name="attention" class="{{ $errors->has('attention') ? ' is-invalid' : '' }}" value="{{ old('attention', $service->attention) }}" required>
                </div>
                @if($errors->has('attention'))
                    <p class="invalid-feedback">{{ $errors->first('attention') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.attention_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="phone_1" class="text-xs required">{{ trans('cruds.service.fields.phone_1') }}</label>

                <div class="form-group">
                    <input type="text" id="phone_1" name="phone_1" class="{{ $errors->has('phone_1') ? ' is-invalid' : '' }}" value="{{ old('phone_1', $service->phone_1) }}" required>
                </div>
                @if($errors->has('phone_1'))
                    <p class="invalid-feedback">{{ $errors->first('phone_1') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.phone_1_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="phone_2" class="text-xs required">{{ trans('cruds.service.fields.phone_2') }}</label>

                <div class="form-group">
                    <input type="text" id="phone_2" name="phone_2" class="{{ $errors->has('phone_2') ? ' is-invalid' : '' }}" value="{{ old('phone_2', $service->phone_2) }}" required>
                </div>
                @if($errors->has('phone_2'))
                    <p class="invalid-feedback">{{ $errors->first('phone_2') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.phone_2_helper') }}</span>
            </div>
            <div class="mb-3">
                <label for="service_request" class="text-xs required">{{ trans('cruds.service.fields.service_request') }}</label>

                <div class="form-group">
                    <input type="text" id="service_request" name="service_request" class="{{ $errors->has('service_request') ? ' is-invalid' : '' }}" value="{{ old('service_request', $service->service_request) }}" required>
                </div>
                @if($errors->has('service_request'))
                    <p class="invalid-feedback">{{ $errors->first('service_request') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.service_request_helper') }}</span>
            </div>
{{-- users --}}
            <div class="mb-3">
                <label for="users" class="text-xs">{{ trans('cruds.service.fields.users') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn-sm btn-indigo select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn-sm btn-indigo deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="select2{{ $errors->has('users') ? ' is-invalid' : '' }}" name="users[]" id="users" multiple>
                    @foreach($users as $id => $users)
                        <option value="{{ $id }}" {{ (in_array($id, old('users', [])) || $service->users->contains($id)) ? 'selected' : '' }}>{{ $users }}</option>
                    @endforeach
                </select>
                @if($errors->has('users'))
                    <p class="invalid-feedback">{{ $errors->first('users') }}</p>
                @endif
                <span class="block">{{ trans('cruds.service.fields.users_helper') }}</span>
            </div>
        </div>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
        </div>
    </form>
</div>
@endsection
