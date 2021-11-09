@extends('adminlte::page')

@section('title', 'Crud')

@section('content_header')
    <h1>Crear articulo</h1>
@stop

@section('content')
<form action="/articulos" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Codigo</label>
        <input type="text" class="form-control" id="" name="codigo" tabindex="1">
        @if ($errors->has('codigo'))
                    <p class="text-danger">{{ $errors->first('codigo') }}</p>
                @endif
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input type="text" class="form-control" id="" name="descripcion" tabindex="2">
        @if ($errors->has('descripcion'))
            <p class="text-danger">{{$errors->first('descripcion')}}</p>
        @endif
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Cantidad</label>
        <input type="number" class="form-control" id="" name="cantidad" tabindex="3">
        @if ($errors->has('cantidad'))
        <p class="text-danger">{{$errors->first('cantidad')}}</p>
        @endif
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Precio</label>
        <input type="number" class="form-control" id="" name="precio"  tabindex="4">
        @if ($errors->has('precio'))
            <p class="text-danger">{{$errors->first('precio')}}</p>
        @endif
    </div>

    <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Cancelar</a>
      <button type="submit" class="btn btn-primary" tabindex="5">Enviar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
