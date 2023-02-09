@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
<div class="card">
  <div class="card-header">
    Comentarios
  </div>
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ID_Usuario</th>
          <th scope="col">ID_Producto</th>
          <th scope="col">Comentario</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($viewData["comment"] as $comments)
        <tr>
          <td>{{ $comments->getId() }}</td>
          <td>{{ $comments->getCommenterId() }}</td>
          <td>{{ $comments->getCommentableId() }}</td>
          <td>{{ $comments->getComment() }}</td>
          <td>
            <a class="btn btn-primary" href="{{route('admin.comments.edit', ['id'=> $comments->getId()])}}">
              <i class="bi-pencil"></i>
            </a>
          </td>
          <td>
            <form action="{{ route('admin.comments.delete', $comments->getId())}}" method="POST">
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
