@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
  <div class="card-header">
    Editar Comentario
  </div>
  <div class="card-body">
    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
      @foreach($errors->all() as $error)
      <li>- {{ $error }}</li>
      @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('admin.comments.update', ['id'=> $viewData['comment']->getId()]) }}"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">ID_Usuario:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="idusuario" value="{{ $viewData['comment']->getCommenterId() }}" type="number" class="form-control" readonly>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">ID_Producto:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="idproducto" value="{{ $viewData['comment']->getCommentableId() }}" type="number" class="form-control" readonly>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Comentario:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="comment" value="{{ $viewData['comment']->getComment() }}" type="text" class="form-control" >
            </div>
          </div>
        </div>
        <div class="col">
          &nbsp;
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Editar</button>
    </form>
  </div>
</div>
@endsection
