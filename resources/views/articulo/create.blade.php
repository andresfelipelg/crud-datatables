@extends('layouts.plantilla')

@section('contenido')

<h2>Crear registros</h2>

<form action="/articulos" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="" name="codigo" tabindex="1">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="" name="descripcion" tabindex="2">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="" name="cantidad" tabindex="3">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" class="form-control" id="" name="precio" value="0.00" tabindex="4">
    </div>
      
    <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="5">Enviar</button>
</form>
    
@endsection