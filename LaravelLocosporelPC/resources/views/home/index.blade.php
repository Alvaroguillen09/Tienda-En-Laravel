@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<style>
  p{
    text-align: center;
    margin-right: 65px;
  }
      </style>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <a href="{{ route('product.index') }}"><img src="{{ asset('/img/oferta2.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/oferta.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/img/oferta31.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span></a>
  </button>
</div>
  <br>

<div class="row">
  <div class="col-12">
    <h2 class="text-center">Productos destacados</h2><br>
<div id="contenedor_principal">
<!--Primera Imagen-->
<div class="contenedor_imagen_texto">
 <a href="{{ route('product.index') }}"><div class="imagen"><img src="{{ asset('/img/foto1.png') }}"></div></a>
 <p><strong>¿Frio? Ya no más<strong></p>
</div>

<!--Segunda Imagen-->
<div class="contenedor_imagen_texto">
 <a href="{{ route('product.index') }}"><div class="imagen"><img src="{{ asset('/img/foto2.png') }}"></div></a>
 <p> ¡Todo el gaming aquí! </p>
</div>

<!--tercera Imagen-->
<div class="contenedor_imagen_texto">
 <a href="{{ route('product.index') }}"><div class="imagen"><img src="{{ asset('/img/foto3.png') }}"></div></a>
    <p>¿A que esperas a verlo?</p>
</div>
</div>
</div>
</div>
<br>
<div class="col-12">
  <h2 class="text-center">Trabajamos con las mejores marcas</h2><br>
    <img src="{{ asset('/img/marcas.png') }}" width="95%">
  </div>
@endsection
