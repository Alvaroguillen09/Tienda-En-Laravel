<style>
   .btn-group-sm>.btn, .btn-sm {
    margin-top: 12px;
   }
    </style>
<div class="card">
    <div class="card-body">
        @if($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            <div class="form-group">
            <label for="message">Escribe una reseña:</label>
                <textarea class="form-control @if($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                <div class="invalid-feedback">
                    Debes escribir algo...
                </div>
                <small class="form-text text-muted"></small>
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">Enviar</button>
        </form>
    </div>
</div>
<br />