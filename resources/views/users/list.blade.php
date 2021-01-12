@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
@endsection
    
@section('content')

<div class="container" style="margin:auto">
  <a href="usuarios/create" class="btn btn-primary mb-3">CREAR</a>
  <table id="table-users" class="table table-striped table-bordered shadow-lg  mt-4">
     <thead class="bg-primary text-white">
       <tr>
         <th scope="col">NOMBRE</th>
         <th scope="col">TIPO DE DOCUMENTO</th>
         <th scope="col">NUMERO DE DOCUMENTO</th>
         <th scope="col">CELULAR</th>
         {{-- <th scope="col"></th> --}}
       </tr>
     </thead>
     <tbody>
       @foreach ( $users as $user )
       <tr>
         <td> {{ $user->name }} </td>
         <td> {{ $user->document_type }} </td>
         <td> {{ $user->document_number }} </td>
         <td> {{ $user->phone }} </td>
         {{-- <td>
           <form action="{{ route('usuarios.destroy', $user->id)}}" method="POST">
            <a href="usuarios/{{$user->id}}/edit" class="btn btn-info" >Editar</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Borrar</button>
           </form>
         </td> --}}
       </tr>
       @endforeach
     </tbody>
  </table>

  @section('js')

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  
  <script>

    $(document).ready(function() {
    $('#table-users').DataTable( {
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - lo sentimos",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ registros totales )",
            "search":"Buscar :",
            "paginate": {
              "next":"Siguiente",
              "previous":"Anterior"
            }
          }
        } );
    } );
    
  </script>
  @endsection


</div>


@endsection