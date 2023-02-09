@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">



<div class="card">
  <div class="card-header">
    Usuarios
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Email</th>
          <th scope="col">Balance</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["users"] as $user)
        <tr>
          <td>{{ $user->getId() }}</td>
          <td>{{ $user->getName() }}</td>
          <td>{{ $user->getEmail() }}</td>
          <td>{{ $user->getBalance() }}</td>
          <td>
            <a class="btn btn-primary" href="{{route('admin.users.edit', ['id'=> $user->getId()])}}">
              <i class="bi-pencil"></i>
            </a>
          </td>
          <td>
            <form action="{{ route('admin.users.delete', $user->getId())}}" method="POST">
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
