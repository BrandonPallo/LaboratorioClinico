@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">

        <h6>OFICINA DIRECCION DE PROYECTOS</h6>

    </div>

    <div class="body">
        @if(session('status'))
            <div class="alert success">
                {{ session('status') }}
            </div>
        @endif

        You are logged in!
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
