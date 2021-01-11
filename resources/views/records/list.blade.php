@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
@endsection
    
@section('content')

<div class="container" style="margin:auto">
  <a href="{{ route('usuarios.home') }}" class="btn btn-primary mb-3">CREAR</a>
  <table id="table-records" class="table table-striped table-bordered shadow-lg  mt-4" style="width:100%">
     <thead class="bg-primary text-white">
       <tr>
         <th scope="col">NOMBRE</th>
         <th scope="col">NÚMERO DE DOCUMENTO</th>
         <th scope="col">TELEFONO</th>
         <th scope="col">TEMPERATURA</th>
         <th scope="col">FECHA DE INGRESO</th>
         {{-- <th scope="col"></th> --}}
       </tr>
     </thead>
     <tbody>

       @foreach ( $records as $record )
       <tr>
        <td> {{ $record-> user -> name}} </td>
        <td> {{ $record-> user -> document_number}} </td>
        <td> {{ $record-> user -> phone}} </td>
        <td> {{ $record-> temperature }} </td>
        <td> {{ $record-> created_at }} </td>
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
    $('#table-records').DataTable( {
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