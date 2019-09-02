@extends('layouts.app')
@section('title')
Inicio
@endsection
@section('styles')
  <style type="text/css">
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
  #carouselProduct {
  	margin: 50px auto;
  	padding: 0 70px;
  }
  #carouselProduct .item {
  	min-height: 330px;
      text-align: center;
  	overflow: hidden;
  }
  #carouselProduct .item .img-box {
  	height: 160px;
  	width: 100%;
  	position: relative;
  }
  #carouselProduct .item img {
  	max-width: 100%;
  	max-height: 100%;
  	display: inline-block;
  	position: absolute;
  	bottom: 0;
  	margin: 0 auto;
  	left: 0;
  	right: 0;
  }
  #carouselProduct .item h4 {
  	font-size: 18px;
  	margin: 10px 0;
  }
  #carouselProduct .item .btn {
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
  #carouselProduct .item .btn:hover, #carouselProduct .item .btn:focus {
  	color: #fff;
  	background: #000;
  	border-color: #000;
  	box-shadow: none;
  }
  #carouselProduct .item .btn i {
  	font-size: 14px;
      font-weight: bold;
      margin-left: 5px;
  }
  #carouselProduct .thumb-wrapper {
  	text-align: center;
  }
  #carouselProduct .thumb-content {
  	padding: 15px;
  }
  #carouselProduct .carousel-control {
  	height: 100px;
      width: 40px;
      background: none;
      margin: auto 0;
      background: rgba(0, 0, 0, 0.2);
  }
  #carouselProduct .carousel-control i {
      font-size: 30px;
      position: absolute;
      top: 50%;
      display: inline-block;
      margin: -16px 0 0 0;
      z-index: 5;
      left: 0;
      right: 0;
      color: rgba(0, 0, 0, 0.8);
      text-shadow: none;
      font-weight: bold;
  }
  #carouselProduct .item-price {
  	font-size: 13px;
  	padding: 2px 0;
  }
  #carouselProduct .item-price strike {
  	color: #999;
  	margin-right: 5px;
  }
  #carouselProduct .item-price span {
  	color: #86bd57;
  	font-size: 110%;
  }
  #carouselProduct .carousel-control.left i {
  	margin-left: -3px;
  }
  #carouselProduct .carousel-control.left i {
  	margin-right: -3px;
  }
  #carouselProduct .carousel-indicators {
  	bottom: -50px;
  }
  .carousel-indicators li, .carousel-indicators li.active {
  	width: 10px;
  	height: 10px;
  	margin: 4px;
  	border-radius: 50%;
  	border-color: transparent;
  }
  .carousel-indicators li {
  	background: rgba(0, 0, 0, 0.2);
  }
  .carousel-indicators li.active {
  	background: rgba(0, 0, 0, 0.6);
  }
  .star-rating li {
  	padding: 0;
  }
  .star-rating i {
  	font-size: 14px;
  	color: #ffc000;
  }

  .mas-productos-container{
    padding-top: 2em;
  }
  </style>
@endsection

@section('content')
<div class="container-fluid">
  <header class="row header-container">
    <div class="col bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://lorempixel.com/1020/500/" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Tienda electronica</h5>
              <p>Los mejores precios.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="http://lorempixel.com/1020/501/" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Facilidad de compra</h5>
              <p>Todos los medios de pagos grcias a Paytopay.</p>
            </div>
          </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </header>
  <div class="row productos-populares-container">
		<div class="col-md-12">
			<h2><b>productos</b> populares</h2>
			<div id="carouselProduct" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carouselProduct" data-slide-to="0" class="active"></li>
				<li data-target="#carouselProduct" data-slide-to="1"></li>
				<li data-target="#carouselProduct" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="item carousel-item active">
					<div class="row">


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
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control left carousel-control-prev" href="#carouselProduct" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control right carousel-control-next" href="#carouselProduct" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
  <div class="row mas-productos-container justify-content-center">
    <div class="col-sm-2">
      <button type="button" class="btn btn-outline-warning btn-lg" onclick="window.location.replace('{{url('productos')}}');">Más productos</button>
    </div>
  </div>
</div>
@endsection
