@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
  <div class="card-header">
    Editar Usuario
  </div>
  <div class="card-body">
    @if($errors->any())
    <ul class="alert alert-danger list-unstyled">
      @foreach($errors->all() as $error)
      <li>- {{ $error }}</li>
      @endforeach
    </ul>
    @endif

    <form method="POST" action="{{ route('admin.users.update', ['id'=> $viewData['user']->getId()]) }}"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="name" value="{{ $viewData['user']->getName() }}" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="email" value="{{ $viewData['user']->getEmail() }}" type="email" class="form-control">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Contraseña:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="password" value="{{ $viewData['user']->getPassword() }}" type="text" class="form-control" readonly>
            </div>
          </div>
        </div>
        <div class="col">
          &nbsp;
        </div>
    </div>
    <div class="row">
        <div class="col">
          <div class="mb-3 row">
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Balance:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
              <input name="balance" value="{{ $viewData['user']->getBalance() }}" type="number" class="form-control">
            </div>
          </div>
        </div>
        <div class="col">
          &nbsp;
        </div>
    </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
</div>
@endsection
