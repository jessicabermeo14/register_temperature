@extends('layouts.app')

@section('content')
<div class="container" style="margin:auto">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <form class="form-horizontal" method="POST" id="form" action="{{ route('registros.store') }}">
          @csrf          
          <fieldset>
            <h1 class="text-center header"> Hola {{ $verification_id[0]->name }} </h1>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="temperature" name="temperature" type="text" placeholder="Temperatura*" class="form-control">
              {{$errors->first('temperature')}}
              </div>
            </div>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="user_id" name="user_id" type="text" class="form-control" value="{{ $verification_id[0]->id }}" style="display: none">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-center">
              <button id='button-send' type="submit" class="btn btn-primary btn-lg">Enviar</button>
              </div>
            </div>
            
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection