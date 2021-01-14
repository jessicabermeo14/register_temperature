@extends('layouts.app')

@section('content')

<div class="container" style="margin:auto">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <form class="form-horizontal" method="POST" action="{{ route('usuarios.search') }}" >
          @csrf             
          <fieldset>
            <h1 class="text-center header">Estas registrado?</h1>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <input id="document" name="document" type="text" placeholder="Documento*" class="form-control">
                {{$errors->first('document')}}
              </div>
            </div>

            <div class="form-group container">
              <div class="row justify-content-center">
                <div class="mx-auto">
                  <button id='button-consult' type="submit" class="btn btn-primary btn-lg mx-auto">Consultar</button>
                  <a href="{{ route('usuarios.create') }}"id='button-consult' class="btn btn-primary btn-lg mx-auto">Registrar</a>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-center">
              <a href="{{ route('registros.index') }}" >Registrar la salida </a>
              </div>
            </div>
            
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection