@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card">
  <div class="card-header">
    Valoraciones
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ID_Usuario</th>
          <th scope="col">ID_Producto</th>
          <th scope="col">Valoración</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["rating"] as $ratings)
        <tr>
          <td>{{ $ratings->getId() }}</td>
          <td>{{ $ratings->getUserId() }}</td>
          <td>{{ $ratings->getProdId() }}</td>
          <td>{{ $ratings->getStarsRated() }}</td>
          <td>
            <form action="{{ route('admin.rating.delete', $ratings->getId())}}" method="POST">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                <i class="bi-trash"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
