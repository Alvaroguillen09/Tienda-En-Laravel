@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card">
  <div class="card-header">
    Pedidos
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Total</th>
          <th scope="col">ID_Usuario</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["order"] as $orders)
        <tr>
          <td>{{ $orders->getId() }}</td>
          <td>{{ $orders->getTotal() }}</td>
          <td>{{ $orders->getUserId() }}</td>
          <td>
            <a class="btn btn-primary" href="{{route('admin.pedidos.edit', ['id'=> $orders->getId()])}}">
              <i class="bi-pencil"></i>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
