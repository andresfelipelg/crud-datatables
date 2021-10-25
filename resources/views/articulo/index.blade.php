@extends('layouts.plantilla')

@section('css')
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="styles">
@endsection
@section('contenido')

   <a href="{{ route('articulos.create') }}" class="btn btn-primary mt-2">Crear</a>

   <table class="table table-dark table-striped mt-4 table-bordered shadow-lg" id="articulos">
     <thead class="bg-primary text-center text-white">
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
@endsection