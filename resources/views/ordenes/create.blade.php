@extends('layouts.app')

@section('title')
Pedir Orden
@endsection

@section('styles')

@endsection

@section('content')
<div class="container">
  <div class="row title-container">
    <h3>Crear orden</h3>
  </div>
  <div class="row productos-container">
    <form class="col-sm-12 col-md-6" action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="name">Nombre del comprador</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="description">Email del comprado</label>
        <input type="email" class="form-control" id="description" name="description" placeholder="Descripcion">
      </div>
      <div class="form-group">
        <label for="price">Telefono del comprado</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Precio">
      </div>
      <div class="form-group">
        <label for="img">Dirección del envío</label>
        <input type="text" class="form-control" id="img" name="img" placeholder="Precio">
      </div>
      <div class="form-group">
        <button type="submit" name="button" class="btn btn-primary">Siguiente</button>
      </div>
    </form>
    <div class="col-sm-12 col-md-6 producto-container">
      <div class="card" style="width: 18rem;">
        <img src="{{Storage::url($producto->img)}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$producto->name}}</h5>
          <p class="card-text">{{$producto->description}}</p>
          <p> Total: {{$producto->price}}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
