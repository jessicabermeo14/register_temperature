@extends('layouts.app')

@section('content')
<div class="container" style="margin:auto">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <div class="loader" style="display: none;">
          <div class="lds-ripple"><div></div><div></div></div>
        </div>
        <form class="form-horizontal" method="POST" action="/registros/{{$record->id}}">
          @csrf
          @method('PUT')          
          <fieldset>
            <h1 class="text-center header">Editar Ingresos</h1>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="document_number" name="document_number" type="text" placeholder="Documento*" class="form-control" value="{{$record->document_number}}">
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="temperature" name="temperature" type="text" placeholder="Temperatura*" class="form-control" value="{{$record->temperature}}">
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