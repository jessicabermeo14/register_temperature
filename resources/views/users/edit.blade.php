@extends('layouts.app')

@section('content')
<div class="container" style="margin:auto">
  <div class="row">
    <div class="col-md-12">
      <div class="well well-sm">
        <form class="form-horizontal" action="{{ route('usuarios.update',$user->id) }}" method="POST">
          @csrf
          @method('PUT')          
          <fieldset>
            <h1 class="text-center header">Editar usuario</h1>
            
            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="name" name="name" type="text" placeholder="Nombre*" class="form-control" value="{{$user->name}}">
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="last_name" name="last_name" type="text" placeholder="Apellido*" class="form-control" value="{{$user->last_name}}">
              </div>
            </div>

            <div class="form-group col-md-8 mx-auto ">
              <label for="state_id" class="control-label"></label>
                <select id="document_type" class="form-control" name="document_type" value="{{$user->document_type}}">
                  <option value="Cédula de Ciudadania">Cédula de Ciudadania</option>
                  <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                  <option value="Cédula de extranjería">Cédula de extranjería</option>
                  <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
              <div class="col-md-8 mx-auto">
              <input id="document_number" name="document_number" type="text" placeholder="Documento*"class="form-control" value="{{$user->document_number}}">
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <input id="phone" name="phone" type="text" placeholder="Telefono*" class="form-control" value="{{$user->phone}}">
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <input id="address" name="address" type="text" placeholder="Dirección*" class="form-control" value="{{$user->address}}">
              </div>
            </div>

            <div class="form-group">
              <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
              <div class="col-md-8 mx-auto">
                <input id="email" name="email" type="text" placeholder="Correo Electronico*" class="form-control" required value="{{$user->email}}">
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