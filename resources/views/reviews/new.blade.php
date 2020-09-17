@extends('layout')
@section('content')
    <div class="container">
        <h1 class="text-center">Ajouter votre avis</h1>
        <br>
        <form action="{{ route('reviews.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-3">
                    <input class="form-control" type="email"  id="email" name="email" placeholder="Votre email">
                </div>
                <div class="form-group col-3">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Votre nom">
                </div>
                <div class="form-group col-2">
                    <select class="form-control" id="rate" name="rate">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group col-4">
                    <input class="form-control" type="file" name="uploads[]" multiple class="form-control">
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Votre Commentaire"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Poster l'avis</button>
        </form>
    </div>
@stop
@section('script')
<script src="//cdn.ckeditor.com/4.15.0/basic/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@stop
