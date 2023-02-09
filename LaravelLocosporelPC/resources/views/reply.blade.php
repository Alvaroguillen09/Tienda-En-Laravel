@extends('layouts.app')
@section('content')
                    <div>
                        <form method="POST" action="{{ route('comments.reply', $comment->getKey()) }}">
                            @csrf
                            <div>
                                <h5>Responde este comentario:</h5>
                            </div>
                            <div>
                                <div class="form-group">
                                    <label for="message">Escribe un mensaje:</label>
                                    <textarea class="form-control" name="message" id="textarea2" rows="3">Respuesta a la reseña con id= {{$comment->getId()}} ||  </textarea>
                                        <script>
                                        var textarea = document.getElementById("textarea2");
                                        textarea.addEventListener("keydown", function(event) {
                                        var key = event.keyCode || event.charCode;
                                        if (key == 8 || key == 46) {
                                            event.preventDefault();
                                        }
                                        });
                                        </script>
                                </div>
                            </div>
                            <div>
                                <a href="javascript: history.go(-2)">Volver atrás</a>
                                <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Actualizar</button>
                            </div>
                        </form>
                    </div>
                    @endsection
             
