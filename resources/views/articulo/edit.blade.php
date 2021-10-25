@extends('layouts.plantilla')

@section('contenido')

<h2>Editar registros</h2>

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
    
@endsection