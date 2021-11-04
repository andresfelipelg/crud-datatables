@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
<form action="/articulos/{{ $articulo-> id}}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="" name="codigo" value="{{ $articulo->codigo }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="" name="descripcion" value="{{ $articulo->descripcion }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="" name="cantidad" value="{{ $articulo->cantidad }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" class="form-control" id="" name="precio" value="{{ $articulo->precio }}">
    </div>
      
    <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="5">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
