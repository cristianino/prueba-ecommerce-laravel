@extends('layouts.app')

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
          <a href="{{url('producto/{$product->id}')}}">
            <div class="img-box">
              <img src="{{$product->img}}" class="img-responsive img-fluid" alt="">
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
    @endforelse
  </div>
</div>
@endsection
