@extends('layouts.app')

@section('title')
Productos
@endsection

@section('styles')

@endsection

@section('content')
<div class="container">
  <div class="row title-container">
    <h3>Todos Nuestros Productos</h3>
  </div>
  <div class="row productos-container">
    @forelse ($products as $product)
      <div class="col-sm-3">
        <div class="thumb-wrapper">
          <a href="{{url('productos/{$product->id}')}}">
            <div class="img-box">
              <img src="{{Storage::url($product->img)}}" class="img-responsive img-fluid" alt="">
            </div>
          </a>
          <div class="thumb-content">
            <h4>{{$product->name}}</h4>
            <p class="item-price"><span>{{$product->price}}</span></p>
            <a href="{{url('comprar/{$product->id}')}}" class="btn btn-primary">Comprar</a>
          </div>
        </div>
      </div>
    @empty
        <p class="col-sm-12">No hay productos para mostrar</p>
        @if (Auth::user()->admin)
          <a href="{{ url('productos/create')}}">Crear producto</a>
        @endif
    @endforelse
  </div>
</div>
@endsection
