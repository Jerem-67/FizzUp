@extends('layout')
@section('content')
    <div class="container">
        <h1 class="text-center">Ajouter votre avis</h1>
        <br>
        <form action="{{ route('reviews.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="form-group col-3">
                    <label for="email">Votre email * : </label>
                    <input class="form-control" type="email"  id="email" name="email" value="{{ old('email') }}">
                    @if($errors->has('email'))
                        <p class="alert-danger">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="form-group col-3">
                    <label for="name">Votre nom * : </label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}">
                    @if($errors->has('name'))
                        <p class="alert-danger">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group col-2">
                    <label for="rate">Votre note * : </label>
                    <select class="form-control" id="rate" name="rate" value="5">
                        <option value="" selected>Ma note</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    @if($errors->has('rate'))
                        <p class="alert-danger">{{ $errors->first('rate') }}</p>
                    @endif
                </div>
                <div class="form-group col-4">
                    <label for="uploads">Vos photos : </label>
                    <input class="form-control" id="unploads" type="file" name="uploads[]" multiple class="form-control">
                    @if($errors->has('uploads.0'))
                        <p class="alert-danger">{{ $errors->first('uploads.0') }}</p>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="content">Votre commentaire * : </label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ old('content') }}</textarea>
                @if($errors->has('content'))
                    <p class="alert-danger">{{ $errors->first('content') }}</p>
                @endif
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Poster l'avis</button>
        </form>
    </div>
@stop
@section('script')
<script src="//cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
@stop
