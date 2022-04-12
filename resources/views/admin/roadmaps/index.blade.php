@extends('layouts.admin')
@extends('layouts.cronometer')
@section('content')
@can('roadmap_create')
    <div class="block my-4">
        <a class="btn-md btn-green" href="{{ route('admin.roadmaps.create') }}">
            {{ trans('global.add') }} {{ trans('cruds.roadmap.title_singular') }}
        </a>
    </div>
@endcan
<div class="main-card">
    <div class="header">
        {{ trans('cruds.roadmap.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="body">
        <div class="w-full">
            <table class="stripe hover bordered datatable datatable-RoadMap">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.roadmap.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.roadmap.fields.date') }}
                        </th>
                        <!-- {{-- <th>
                            {{ trans('cruds.project.fields.users') }}
                        </th> --}} -->
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roadmaps as $key => $roadmap)
                        <tr data-entry-id="{{ $roadmap->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $roadmap->id ?? '' }}
                            </td>
                            <td>
                                {{ $roadmap->date ?? '' }}
                            </td>
                            <!-- {{-- <td>
                                @foreach($project->users as $key => $item)
                                    <span class="badge blue">{{ $item->name }}</span>
                                @endforeach
                            </td> --}} -->
                            <td>
                                @can('roadmap_show')
                                    <a class="btn-sm btn-indigo" href="{{ route('admin.roadmaps.show', $roadmap->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('roadmap_edit')
                                    <a class="btn-sm btn-blue" href="{{ route('admin.roadmaps.edit', $roadmap->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('roadmap_delete')
                                    <form action="{{ route('admin.roadmaps.destroy', $roadmap->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn-sm btn-red" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan
                                <a href="{{url('generate-pdf/' . $roadmap->id)}}"  class="btn-sm btn-red">Exportar PDF</a>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            <section class="section">
                <div class="columns">
                    <div class="column has-text-centered">
                        <h2 id="tiempoTranscurrido"></h2>
                        <button class="button is-success is-large" id="btnIniciar"><span class="mdi mdi-play"></span></button>
                        <button class="button is-success is-large" id="btnPausar"><span class="mdi mdi-pause"></span></button>
                        <button class="button is-primary is-large" id="btnMarca"><span class="mdi mdi-flag"></span></button>
                        <button class="button is-warning is-large" id="btnDetener"><span class="mdi mdi-stop"></span></button>
                        <div id="contenedorMarcas">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", () => {
    const $tiempoTranscurrido = document.querySelector("#tiempoTranscurrido"),
        $btnIniciar = document.querySelector("#btnIniciar"),
        $btnPausar = document.querySelector("#btnPausar"),
        $btnMarca = document.querySelector("#btnMarca"),
        $btnDetener = document.querySelector("#btnDetener"),
        $contenedorMarcas = document.querySelector("#contenedorMarcas");
    let marcas = [],
        idInterval,
        tiempoInicio = null;
    let diferenciaTemporal = 0;

    const ocultarElemento = elemento => {
        elemento.style.display = "none";
    }

    const mostrarElemento = elemento => {
        elemento.style.display = "";
    }

    const agregarCeroSiEsNecesario = valor => {
        if (valor < 10) {
            return "0" + valor;
        } else {
            return "" + valor;
        }
    }

    const milisegundosAMinutosYSegundos = (milisegundos) => {
        const minutos = parseInt(milisegundos / 1000 / 60);
        milisegundos -= minutos * 60 * 1000;
        segundos = (milisegundos / 1000);
        return `${agregarCeroSiEsNecesario(minutos)}:${agregarCeroSiEsNecesario(segundos.toFixed(1))}`;
    };


    const iniciar = () => {
        const ahora = new Date();
        tiempoInicio = new Date(ahora.getTime() - diferenciaTemporal);
        clearInterval(idInterval);
        idInterval = setInterval(refrescarTiempo, 100);
        ocultarElemento($btnIniciar);
        ocultarElemento($btnDetener);
        mostrarElemento($btnMarca);
        mostrarElemento($btnPausar);
    };
    const pausar = () => {
        diferenciaTemporal = new Date() - tiempoInicio.getTime();
        clearInterval(idInterval);
        mostrarElemento($btnIniciar);
        ocultarElemento($btnMarca);
        ocultarElemento($btnPausar);
        mostrarElemento($btnDetener);
    };
    const refrescarTiempo = () => {
        const ahora = new Date();
        const diferencia = ahora.getTime() - tiempoInicio.getTime();
        $tiempoTranscurrido.textContent = milisegundosAMinutosYSegundos(diferencia);
    };
    const ponerMarca = () => {
        marcas.unshift(new Date() - tiempoInicio.getTime());
        dibujarMarcas();
    };
    const dibujarMarcas = () => {
        $contenedorMarcas.innerHTML = "TIEMPOS";
        for (const [indice, marca] of marcas.entries()) {
            const $li = document.createElement("p");
            $li.innerHTML = `<strong class="is-size-4">${marcas.length - indice}.</strong> ${milisegundosAMinutosYSegundos(marca)}`;
            $li.classList.add("is-size-3");
            $contenedorMarcas.append($li);
        }
    };

    const detener = () => {
        // if (!confirm("¿Detener?")) {
        // 	return;
        // }
        clearInterval(idInterval);
        init();
        marcas = [];
        dibujarMarcas();
        diferenciaTemporal = 0;
    }

    const init = () => {
        $tiempoTranscurrido.textContent = "00:00.0";
        ocultarElemento($btnPausar);
        ocultarElemento($btnMarca);
        ocultarElemento($btnDetener);
    };
    init();

    $btnIniciar.onclick = iniciar;
    $btnMarca.onclick = ponerMarca;
    $btnPausar.onclick = pausar;
    $btnDetener.onclick = detener;
    });
    </script>
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('roadmap_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.roadmaps.massDestroy') }}",
    className: 'btn-red',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-RoadMap:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });

})

</script>
@endsection
