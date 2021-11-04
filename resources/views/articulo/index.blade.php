@extends('adminlte::page')

@section('title', 'crud con laravel 8')

@section('content_header')
    <h1>Listado de Articulos</h1>
@stop

@section('content')
    
    <a href="{{ route('articulos.create') }}" class="btn btn-primary mt-2 mb-3">Crear</a>

   <table class="table table-dark table-striped mt-4 table-bordered shadow-lg" id="articulos">
     <thead class="bg-primary  text-white">
         <tr>
             <th scope="col">ID</th>
             <th scope="col">Codigo</th>
             <th scope="col">Descripcion</th>
             <th scope="col">Cantidad</th>
             <th scope="col">Precio</th>
             <th scope="col">Acciones</th>
             

         </tr>
     </thead>
     <tbody>
         @foreach ($articulos as $articulo )

         <tr>
             <td>{{ $articulo-> id}} </td>
             <td>{{ $articulo-> codigo}} </td>
             <td>{{ $articulo-> descripcion}} </td>
             <td>{{ $articulo-> cantidad}} </td>
             <td>{{ $articulo-> precio}}</td>
             <td>
                 <form action="{{ route('articulos.destroy',$articulo->id) }}" method="post">
                 @csrf
                 @method('DELETE')
                    <a href="/articulos/{{ $articulo->id }}/edit" class="btn btn-info">Editar</a>
                <button href=""class="btn btn-danger" type="submit" >Borrar</button>
            </form>
            </td>
         </tr>
         </tr>
         </tr>
         </tr>
             
         @endforeach
     </tbody>
   </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
     $('#articulos').DataTable({
         
         "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
     });
      } );
</script>
@stop
