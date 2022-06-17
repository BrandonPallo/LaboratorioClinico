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
                <a class="btn-md btn-gray" href="{{ route('admin.roadmaps.index') }}">{{ trans('global.back_to_list') }}</a>
            </div>
            {{-- formulario hoja de ruta --}}
            <div class="mb-3">
                <label for="day" class="text-xs required">{{ trans('cruds.roadmap.fields.day') }}</label>
                <div class="form-group">
                    <input type="text" id="day" name="day" class="{{ $errors->has('day') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('day', $roadmap->day) }}" required>
                </div>

            </div>
{{-- datos --}}
            <div class="mb-3">
                <label for="date" class="text-xs required">{{ trans('cruds.roadmap.fields.date') }}</label>

                <div class="form-group">
                    <input type="text" id="date" name="date" class="{{ $errors->has('date') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('date',$roadmap->date) }}" required>
                </div>

            </div>

            <div class="mb-3">

                <label for="out_time" class="text-xs required">{{ trans('cruds.roadmap.fields.out_time') }}</label>

                <div class="form-group">
                    <input type="text" id="out_time" name="out_time" class="{{ $errors->has('out_time') ? ' is-invalid' : '' }}" value="{{ old('out_time', $roadmap->out_time) }}">
                </div>

                <div class="block my-4">
                    <input class="btn-md btn-green" id="btn1" type='button' value='Guardar hora de salida' >

                </div>
                <!-- //Cronometro -->
                <!-- <section class="section">
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
            </section> -->
           </div>



            <div class="mb-3">
                <label for="start_time" class="text-xs required">{{ trans('cruds.roadmap.fields.start_time') }}</label>

                <div class="form-group">
                    <input type="text" id="start_time" name="start_time" class="{{ $errors->has('start_time') ? ' is-invalid' : '' }}"  value="{{ old('start_time', $roadmap->start_time) }}">
                </div>
                <div class="block my-4">
                    <input class="btn-md btn-green" id="btn2" type='button' value='Guardar hora de inicio' >

                </div>
            </div>

            <div class="mb-3">
                <label for="end_time" class="text-xs required">{{ trans('cruds.roadmap.fields.end_time') }}</label>

                <div class="form-group">
                    <input type="text" id="end_time" name="end_time" class="{{ $errors->has('end_time') ? ' is-invalid' : '' }}"  value="{{ old('end_time', $roadmap->end_time) }}">
                </div>
                <div class="block my-4">
                    <input class="btn-md btn-green" id="btn3" type='button' value='Guardar hora de finalización'>
                </div>
            </div>
            <div class="mb-3">
                <label for="in_time" class="text-xs required">{{ trans('cruds.roadmap.fields.in_time') }}</label>

                <div class="form-group">
                    <input type="text" id="in_time" name="in_time" class="{{ $errors->has('in_time') ? ' is-invalid' : '' }}"  value="{{ old('in_time', $roadmap->in_time) }}">
                </div>

                <div class="block my-4">
                    <input class="btn-md btn-green" id="btn4" type='button' value='Guardar hora de llegada'>
                </div>
            </div>
            
            <div class="mb-3">
                <label for="labor" class="text-xs required">{{ trans('cruds.roadmap.fields.labor') }}</label>

                <div class="form-group">
                    <input type="text" id="labor" name="labor" class="{{ $errors->has('labor') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('labor', $roadmap->labor) }}" >
                </div>
                
            </div>

            <div class="mb-3">
                <label for="travel" class="text-xs required">{{ trans('cruds.roadmap.fields.travel') }}</label>

                <div class="form-group">
                    <input type="text" id="travel" name="travel" class="{{ $errors->has('labor') ? ' is-invalid' : '' }}" readonly=»readonly» value="{{ old('travel', $roadmap->travel) }}">
                </div>
                
            </div>

            <div class="mb-3">
                <label for="travel" class="text-xs required">{{ trans('cruds.roadmap.fields.standby') }}</label>

                <div class="form-group">
                    <input type="text" id="standby" name="standby" class="{{ $errors->has('standby') ? ' is-invalid' : '' }}" value="{{ old('standby', $roadmap->standby) }}">
                </div>
            </div>
            <h1>PROGRESO DEL SERVICIO</h1>
            <br>
            <!-- barra de progreso -->
            <div class="mb-3">
                <label for="porcentaje" class="text-xs required">{{ trans('cruds.roadmap.fields.porcentaje') }}</label>

                <div id="myProgress">
                    <div id="myBar">
                        <div id="label">0</div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" id="porcentaje" name="porcentaje" class="{{ $errors->has('porcentaje') ? ' is-invalid' : '' }}" value="{{ old('porcentaje', $roadmap->porcentaje) }}" >
                </div>
            </div>
            <!-- botones de progreso -->
            <div class="block my-4">
                <input class="btn-md btn-red" id="btn6" type='button' value='Reducir progreso' onclick="reducir()">
                <input class="btn-md btn-blue" id="btn5" type='button' value='Añadir progreso' onclick="aumentar()"> 
            </div>
            <!-- barra de porgreso circular -->
            <div class="block my-4">
                   <div class="circular-progress">
                        <div class="value-container">0%</div>
                    </div>
            </div> 

            {{-- <!-- <div class="mb-3">
                <label for="labor" class="text-xs required">{{ trans('cruds.roadmap.fields.labor') }}</label>

                <div class="form-group">
                    <input type="text" id="labor" name="labor" class="{{ $errors->has('labor') ? ' is-invalid' : '' }}"  value="{{ old('labor') }}" required>
                </div>
                @if($errors->has('labor'))
                    <p class="invalid-feedback">{{ $errors->first('labor') }}</p>
                @endif
                <span class="block">{{ trans('cruds.roadmap.fields.labor_helper') }}</span>
                <div class="block my-4">
            </div> -->

            </div> --}}

{{-- users
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
            </div> --> --}}
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
    <script>
            var x = document.getElementById("porcentaje");
            //x.style.display = "none";
            let dia=moment().format('dddd');  
            let fecha=moment().format('DD/MM/YYYY');  
            document.getElementById('day').value=dia;
            document.getElementById('date').value=fecha;
            var t,t1,t2,t3;
            const button1 = document.getElementById("btn1");
            const button2 = document.getElementById("btn2");
            const button3 = document.getElementById("btn3");
            const button4 = document.getElementById("btn4");
            const button5 = document.getElementById("btn5");
            const button6 = document.getElementById("btn6");

            document.getElementById("btn1").onclick = function(){
                if(document.getElementById('out_time').value===""){
                    let opc1=confirm('¿Quiere agregar una hora de salida?');
                    if (opc1==true){
                        t=moment().format('HH:mm:ss');
                        document.getElementById('out_time').value=t;  
                        button1.disabled = true;
                    }
                }else{
                    let opc2=confirm('¿Quiere agregar una hora de salida manualmente?');
                    if (opc2==true){
                        t = document.getElementById("out_time").value;
                        button1.disabled = true  ;
                    }
                }
                
            }               
            document.getElementById("btn2").onclick = function(){
                if(document.getElementById('start_time').value===""){
                    let opc3=confirm('¿Quiere agregar una hora de inicio?');
                    if (opc3==true){
                        t1=moment().format('HH:mm:ss');
                        document.getElementById('start_time').value=t1;  
                        button2.disabled = true;
                    }
                }else{
                    let opc4=confirm('¿Quiere agregar una hora de inicio manualmente?');
                    if (opc4==true){
                        t1 = document.getElementById("start_time").value;
                        button2.disabled = true  ;
                    }
                }
            }  
            document.getElementById("btn3").onclick = function(){
                if(document.getElementById('end_time').value===""){
                    let opc5=confirm('¿Quiere agregar una hora de finalización?');
                    if (opc5==true){
                        t2=moment().format('HH:mm:ss');
                        document.getElementById('end_time').value=t2; 
                        calculoHorasTrabajadas();
                        button3.disabled = true;
                    }
                }else{
                    let opc6=confirm('¿Quiere agregar una hora de finalización manualmente?');
                    if (opc6==true){
                        t2 = document.getElementById("end_time").value;
                        calculoHorasTrabajadas();
                        button3.disabled = true  ;
                    }
                }
            }
            document.getElementById("btn4").onclick = function(){
                if(document.getElementById('in_time').value===""){
                    let opc7=confirm('¿Quiere agregar una hora de llegada?');
                    if (opc7==true){
                        t3=moment().format('HH:mm:ss');
                        document.getElementById('in_time').value=t3;  
                        calculoHorasViaje();
                        button4.disabled = true;
                    }
                }else{
                    let opc8=confirm('¿Quiere agregar una hora de llegada manualmente?');
                    if (opc8==true){
                        t3 = document.getElementById("in_time").value;
                        calculoHorasViaje();
                        button4.disabled = true  ;
                    }
                }
                
            } 
            function calculoHorasTrabajadas(){
                let dif=moment(t2,'HH:mm:ss').diff(moment(t1, 'HH:mm:ss'));
                let d = moment.duration(dif, 'milliseconds');
                let hours = Math.floor(d.asHours());
                let mins = Math.floor(d.asMinutes()) - hours * 60;
                document.getElementById('labor').value=hours;
            }
            function calculoHorasViaje(){
                let dif1=moment(t1,'HH:mm:ss').diff(moment(t, 'HH:mm:ss'));
                let dif2=moment(t3,'HH:mm:ss').diff(moment(t2, 'HH:mm:ss'));
                let sum=dif1+dif2;
                let d = moment.duration(sum, 'milliseconds');
                let hours = Math.floor(d.asHours());
                let mins = Math.floor(d.asMinutes()) - hours * 60;
                document.getElementById('travel').value=hours;
            }
            //barra de progreso
            //obtener el valor del porcentaje de la base de datos
            var width=document.getElementById('porcentaje').value;
            //asignar el valor del porcentaje al label
            document.getElementById("label").innerHTML = width +'%';
            //asignar el valor de la barra
            document.getElementById("myBar").value = width+"%";
            console.log(document.getElementById("label").value = width+"%");
            var eleme = document.getElementById("myBar");
            eleme.style.width = width + '%';
            console.log("hola: "+width);
            console.log("bar "+document.getElementById("myBar").value);
            //variables de barra de progreso circular
            let progressBar = document.querySelector(".circular-progress");
            let valueContainer = document.querySelector(".value-container");
            let progressValue = 0;
            function aumentar(){
                var nuevo=width;
                console.log("trincado "+nuevo);
                if (nuevo < 100) {
                    console.log("width "+nuevo);
                    var elem = document.getElementById("myBar");
                    nuevo+=10; 
                    console.log("width 3 "+nuevo);
                    elem.style.width = nuevo + '%'; 
                    document.getElementById("label").innerHTML = nuevo +'%';
                    if(width==100){
                        alert("Trabajo completado");
                    }
                    // if(width==nuevo){
                    //     console.log("trincado2 "+width/100);
                    // }
                    document.getElementById('porcentaje').value=width;
                }

                //aumento barra de progreso circular
                if(progressValue<100){
                    progressValue+=10;
                    valueContainer.textContent = `${progressValue}%`;
                    progressBar.style.background = `conic-gradient(
                        #4d5bf9 ${progressValue * 3.6}deg,
                        #cadcff ${progressValue * 3.6}deg  
                    )`;
                }
            }
            function reducir(){
                if (width > 0) {
                    var elem = document.getElementById("myBar");        
                    width-=10; 
                    elem.style.width = width + '%'; 
                    document.getElementById("label").innerHTML = width+'%';
                    document.getElementById('porcentaje').value=width;
                }
                //disminucion barra de progreso circular
                if(progressValue>0){
                    progressValue-=10;
                    valueContainer.textContent = `${progressValue}%`;
                    progressBar.style.background = `conic-gradient(
                        #4d5bf9 ${progressValue * 3.6}deg,
                        #cadcff ${progressValue * 3.6}deg  
                    )`;
                }
            }  
            
        </script>

        <div class="footer">
            <button type="submit" class="submit-button">{{ trans('global.save') }}</button>
            <a class="btn-md btn-gray" href="{{ route('admin.roadmaps.index') }}">{{ trans('global.back_to_list') }}</a>
        </div>
    </form>
</div>

@endsection