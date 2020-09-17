@extends('layout')
@section('content')
    <div class="container">
        <h1 class="text-center">Ajouter votre avis</h1>
        <form action="{{ route('reviews.create') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <input type="email"  id="email" name="email" placeholder="Votre email">
            </div>
            <div class="form-group">
                <input type="text" id="name" name="name" placeholder="Votre nom">
            </div>
            <div class="form-group">
                <select class="form-control" id="rate" name="rate">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="form-group">
                <textarea class="form-control" id="content" name="content" rows="3" placeholder="Votre Commentaire"></textarea>
            </div>
            <input type="file" name="uploads[]" multiple class="form-control">
            <button type="submit" class="btn btn-primary">Poster l'avis</button>
        </form>
    </div>
@stop
