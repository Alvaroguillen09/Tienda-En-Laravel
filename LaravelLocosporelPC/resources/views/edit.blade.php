@extends('layouts.app')
@section('content')
                    <div>
                        <form method="POST" action="{{ route('comments.update', $comment->getKey()) }}">
                            @method('PUT')
                            @csrf
                            <div>
                                <h5>Editar comentario</h5>
                                </button>
                            </div>
                            <div>
                                <div class="form-group">
                                    <textarea required class="form-control" name="message" rows="3">{{ $comment->comment }}</textarea>
                                </div>
                            </div>
                            <div>
                                <a href="javascript: history.go(-2)">Volver atrás</a>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Actualizar</button>
                            </div>
                        </form>
                    </div>

@endsection