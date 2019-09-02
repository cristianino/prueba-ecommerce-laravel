@extends('layouts.app')

@section('title')
Crear productos
@endsection

@section('styles')

@endsection

@section('content')
<div class="container">
  <div class="row title-container">
    <h3>Crear Producto</h3>
  </div>
  <div class="row productos-container">
    <form class="col" action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Nombre del producto</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="description">Descripción (opcional)</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion">
      </div>
      <div class="form-group">
        <label for="price">Precio</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Precio">
      </div>
      <div class="form-group">
        <label for="img">Imagen</label>
        <input type="file" class="form-control" id="img" name="img" placeholder="Precio">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="popular" name="popular">
        <label class="form-check-label" for="popular">¿Favorito? - Sandrá en la pantalla</label>
      </div>
      <div class="form-group">
        <button type="submit" name="button" class="btn btn-primary">Guardar</button>
      </div>
    </form>
  </div>
</div>
@endsection
