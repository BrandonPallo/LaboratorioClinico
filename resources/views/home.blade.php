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

        Bienvenido a SIEUS!
    </div>
      <!-- barra de porgreso circular -->
      <div class="block my-4" id="barra" align="center">
          <h1 align="center">PORCENTAJE DE TRABAJO</h1>
            <div class="circular-progress">
                <div class="value-container">0%</div>
            </div>
    </div> 
    <html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Dia', 'Horas de standby', 'Horas de viaje','Horas de trabajo'],
                @foreach ($barra as $barras)
                    ['{{$barras->day}}','{{$barras->standby}}','{{$barras->travel}}','{{$barras->labor}}'],
                @endforeach    
            ]);
            var options = {
            chart: {
                title: 'Resumen de horas en el servicio',
                //subtitle: 'Sales, Expenses, and Profit: 2014-2017',
            },
            bars: 'horizontal' // Required for Material Bar Charts.
            };
            var chart = new google.charts.Bar(document.getElementById('barchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
        
        
        </script>
    </head>
    <body>
        <div id="barchart_material" style="width: 900px; height: 500px;"></div>
    </body>
    </html>

</div>
@endsection
@section('scripts')
@parent

@endsection
