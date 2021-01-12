@extends('layouts.app')

@section('content')
<div class="container" style="margin:auto">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <form class="form-horizontal" method="POST" action="{{ route('registros.update', $record->id)}}">
          @csrf
          @method('PUT')          
          <fieldset>
            <h1 class="text-center header">Registro de salida</h1>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label>Temperatura Final</label>
                <input id="final_temperature" name="final_temperature" type="text" class="form-control">
                {{$errors->first('final_temperature')}}
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label>Código del termómetro</label>
                <input id="final_thermometer_code" name="final_thermometer_code" type="text" class="form-control">
                {{$errors->first('final_thermometer_code')}}
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-center">
              <button id='button-send' type="submit" class="btn btn-primary btn-lg">Actualizar Datos</button>
              </div>
            </div>
            
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection