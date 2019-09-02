@extends('layouts.app')

@section('title')
Ordenes
@endsection

@section('styles')
<style media="screen">

</style>
@endsection

@section('content')
<div class="container">
  <div class="row title-container">
    <h3>Todas tus ordenes</h3>
  </div>
  <div class="row productos-container">
    <table class="table table-borderless .table-responsive">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Producto</th>
          <th scope="col">email</th>
          <th scope="col">Nombre</th>
          <th scope="col">dirección</th>
          <th scope="col">Telefono</th>
          <th scope="col">Estato</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($orders as $order)
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        @empty
            <p class="col-sm-12">No hay ordenes para mostrar</p>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
