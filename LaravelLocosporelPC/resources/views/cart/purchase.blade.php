@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
  <div class="card-header">
    Pedido realizado
  </div>
  <div class="card-body">
    <div class="alert alert-success" role="alert">
      Enhorabuena, la compra se ha realizado correctamente. El número de pedido es: <b>#{{ $viewData["order"]->getId() }}</b>
    </div>
  </div>
</div>
@endsection
