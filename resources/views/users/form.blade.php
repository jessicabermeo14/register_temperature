@extends('layouts.app')

@section('content')
<div class="container" style="margin:auto">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <form class="form-horizontal" method="POST" id="form" action="{{ route('usuarios.store') }}">
          @csrf          
          <fieldset>
            <h1 class="text-center header">Formulario de registro</h1>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label >Nombre</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name')}}">
                {{$errors->first('name')}}
              </div>
            </div>

            <div class="form-group col-md-8 mx-auto ">
                <label for="state_id" class="control-label">Tipo de documento</label>
                <select id="document_type" class="form-control" name="document_type" value="{{ old('document_type')}}">
                    <option value="Cédula de Ciudadania">Cédula de Ciudadania</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                    <option value="Cédula de extranjería">Cédula de extranjería</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label >Número de documento</label>
                <input id="document_number" name="document_number" type="number" class="form-control" value="{{old('document_number')}}">
                {{$errors->first('document_number')}}
              </div>
            </div>
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label >Télefono</label>
                <input id="phone" name="phone" type="number"  class="form-control" value="{{ old('phone')}}">
                {{$errors->first('phone')}}
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label >Dirección</label>
                <input id="address" name="address" type="text"  class="form-control" value="{{ old('address')}}">
                {{$errors->first('address')}}
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <label >Correo electronico</label>
                <input id="email" name="email" type="text"  class="form-control" value="{{ old('email')}}">
                {{$errors->first('email')}}
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-center">
              <button id='button-send' type="submit" class="btn btn-primary btn-lg">Enviar Datos</button>
              </div>
            </div>
          </fieldset>
        </form>
        
      </div>
    </div>
  </div>
</div>

@endsection