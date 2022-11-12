@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">

        <h6>LABORATORIOS CLÍNICOS</h6>

    </div>

    <div class="body">
        @if(session('status'))
            <div class="alert success">
                {{ session('status') }}
            </div>
        @endif

        ¡Bienvenido!
    </div> 
    <html>
    <body>
        <div id="barchart_material" style="width: 900px; height: 500px;"></div>
    </body>
    </html>

</div>
@endsection
@section('scripts')
@parent

@endsection
