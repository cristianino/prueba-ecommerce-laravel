@extends('layouts.app')

@section('title')
Productos
@endsection

@section('styles')
<style media="screen">
body {
  font-family: "Open Sans", sans-serif;
}
h2 {
  color: #000;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 80px;
}
h2 b {
  color: #ffc000;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 4px;
  background: rgba(0, 0, 0, 0.2);
  left: 0;
  right: 0;
  bottom: -20px;
}
.productos-container .item {
  min-height: 330px;
    text-align: center;
  overflow: hidden;
}
.productos-container .item .img-box {
  height: 160px;
  width: 100%;
  position: relative;
}
.productos-container .item img {
  width: 450px;
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
  position: absolute;
  bottom: 0;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.productos-container .item h4 {
  font-size: 18px;
  margin: 10px 0;
}
.productos-container .item .btn {
  color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.productos-container .item .btn:hover, .productos-container .item .btn:focus {
  color: #fff;
  background: #000;
  border-color: #000;
  box-shadow: none;
}
.productos-container .item .btn i {
  font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.productos-container .thumb-wrapper {
  text-align: center;
}
.productos-container .thumb-content {
  padding: 15px;
}
.productos-container .item-price {
  font-size: 13px;
  padding: 2px 0;
}
.productos-container .item-price strike {
  color: #999;
  margin-right: 5px;
}
.productos-container .item-price span {
  color: #86bd57;
  font-size: 110%;
}
.productos-container .carousel-indicators {
  bottom: -50px;
}
.star-rating li {
  padding: 0;
}
.star-rating i {
  font-size: 14px;
  color: #ffc000;
}
</style>
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
          <a href="{{url('productos/'.$product->id)}}">
            <div class="img-box">
              <img src="{{Storage::url($product->img)}}" class="img-responsive img-fluid" alt="">
            </div>
          </a>
          <div class="thumb-content">
            <h4>{{$product->name}}</h4>
            <p class="item-price"><span>{{$product->price}}</span></p>
            <a href="{{url('comprar/'.$product->id)}}" class="btn btn-warning">Comprar</a>
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
