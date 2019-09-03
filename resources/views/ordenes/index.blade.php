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
          <th scope="col">Nombre</th>
          <th scope="col">email</th>
          <th scope="col">dirección</th>
          <th scope="col">Telefono</th>
          <th scope="col">Estado</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($orders as $order)
        <tr>
          <th scope="row">{{$order->id}}</th>
          <td>{{$order->Product->name}}</td>
          <td>{{$order->customer_name}}</td>
          <td>{{$order->customer_email}}</td>
          <td>{{$order->customer_address}}</td>
          <td>{{$order->customer_mobile}}</td>
          @if ($order->status == 'CREATED')
            <td class="text-warning">Pago pendiente</td>
              <td> <button type="button" name="button" class="btn btn-primary">Pagar</button> </td>
          @elseif ($order->status == 'PAYED')
            <td class="text-success">Pagada</td>
            <td></td>
          @elseif ($order->status == 'REJECTED')
            <td class="text-danger">Rechazada</td>
              <td> <button type="button" name="button" class="btn btn-primary">Reintentar</button> </td>
          @else
            <td>Error en la orden</td>
          @endif
        </tr>
        @empty
            <p class="col-sm-12">No hay ordenes para mostrar</p>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
