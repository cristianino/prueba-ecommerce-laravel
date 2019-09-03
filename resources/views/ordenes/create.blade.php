@extends('layouts.app')

@section('title')
Pedir Orden
@endsection

@section('styles')
<style media="screen">
  .productos-container{
    padding-bottom: 2em;
  }
</style>
@endsection

@section('content')
<div class="container">
  <div class="row title-container">
    <h3>Crear orden</h3>
  </div>
  <div class="row productos-container">
    <form class="col-sm-12 col-md-6">
      @csrf
      <div class="form-group">
        <label for="name">Nombre del comprador</label>
        <input type="text" class="form-control" id="name" v-model="comprador.name" name="name" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="email">Email del comprado</label>
        <input type="email" class="form-control" id="email" v-model="comprador.email" name="email" placeholder="email">
      </div>
      <div class="form-group">
        <label for="mobile">Telefono del comprado</label>
        <input type="number" class="form-control" id="mobile" v-model="comprador.mobile" name="mobile" placeholder="Telefono">
      </div>
      <div class="form-group">
        <label for="address">Dirección del envío</label>
        <input type="text" class="form-control" id="address" v-model="comprador.address" name="address" placeholder="Dirección de residencia">
      </div>
      <div class="form-group">
        <label for="address">Documento de identidad CC</label>
        <input type="text" class="form-control" id="address" v-model="comprador.documento" name="address" placeholder="Cedula de ciudadania">
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
  <div class="row justify-content-center">
    <div class="col-sm-6">
      <p class="text-muted">
        Los servicios de cobro serán proporcionados por PaytoPay.
      </p>
    </div>

    <div class="col-sm-6">
      <button type="button" name="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#confirm-data-container" v-if="comprador.name && comprador.email && comprador.mobile && comprador.address">Siguiente</button>
      <button type="button" name="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#confirm-data-container" v-else disabled>Siguiente</button>
    </div>
  </div>
  <div class="modal fade" id="confirm-data-container" tabindex="-1" role="dialog" aria-labelledby="confirm-data-container-title" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirm-data-container-title">Confirma tus datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body container-fluid">
          <div class="row">
            <div class="col-sm-6 datos-comprador-confirm-container">
              <h2>Datos del comprador</h2>
              <p v-if="comprador.name">Nombre: @{{comprador.name}}</p>
              <p v-if="comprador.email">Email: @{{comprador.email}}</p>
              <p v-if="comprador.mobile">Telefono: @{{comprador.mobile}}</p>
              <p v-if="comprador.address">Dirección de envío: @{{comprador.address}}</p>
              <p v-if="comprador.documento">CC: @{{comprador.documento}}</p>
            </div>
            <div class="col-sm-6 producto-confirm-container">
              <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($producto->img)}}" class="card-img-top" alt="{{$producto->name}} image">
                <div class="card-body">
                  <h5 class="card-title">{{$producto->name}}</h5>
                  <h3> Total: {{$producto->price}}</h3>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Editar datos</button>
          <button type="button" class="btn btn-primary" @click="createOrder('{{$producto->id}}')" data-dismiss="modal">Pagar</button>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://secure.placetopay.com/redirection/lightbox.min.js"></script>
@endsection
