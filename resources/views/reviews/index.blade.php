@extends('layout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Avis des utilisateurs</h1>
            <p class="lead text-muted">Voici ce que les gens pensent de nous, n'hésitez pas à donner vôtre avis</p>
            <p>
                <a href="{{ URL::route('reviews.create') }}" class="btn btn-primary my-2">Je donne mon avis</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="text-center">
                @if(Route::current()->uri == 'asc' or Route::current()->uri == 'asc/rate/{stars}')
                    <a href="{{ URL::route('reviews.index') }}">Trier par date <i class="fas fa-chevron-up"></i></a>
                @else
                    <a href="{{ URL::route('reviews.indexAsc') }}">Trier par date <i class="fas fa-chevron-down"></i></a>
                @endif
            </div>
            <hr>
            <div class="row justify-content-end">
                <div class="col-md-3">
                    @if(Route::current()->uri == 'asc' or Route::current()->uri == 'asc/rate/{stars}')
                        <div class="row">
                            <a href="{{ URL::route('reviews.indexAsc') }}">Tous les commentaires ({{ count($reviews) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 5) }}">5 étoilés ({{ count($reviews->where('rate', 5)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 4) }}">4 étoiles ({{ count($reviews->where('rate', 4)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 3) }}">3 étoiles ({{ count($reviews->where('rate', 3)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 2) }}">2 étoiles ({{ count($reviews->where('rate', 2)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 1) }}">1 étoile ({{ count($reviews->where('rate', 1)) }})</a>
                        </div>
                    @else
                        <div class="row">
                            <a href="{{ URL::route('reviews.index') }}">Tous les commentaires ({{ count($reviews) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 5) }}">5 étoiles ({{ count($reviews->where('rate', 5)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 4) }}">4 étoiles ({{ count($reviews->where('rate', 4)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 3) }}">3 étoiles ({{ count($reviews->where('rate', 3)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 2) }}">2 étoiles ({{ count($reviews->where('rate', 2)) }})</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 1) }}">1 étoiles ({{ count($reviews->where('rate', 1)) }})</a>
                        </div>
                    @endif
                </div>
                @if(! $reviews->isEmpty())
                    @foreach($reviews as $review)
                        <div class="col-md-9">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h4>Comentaire de {{ $review->name }}:</h4>
                                    <h5>Note: {{ $review->rate }}/5</h5>
                                    <p class="card-text">{!! $review->content !!}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @foreach($files as $file)
                                            @if($file->reviews_id == $review->id)
                                                <div class="btn-group">
                                                    <a href="{{ URL::route('reviews.show', $review->id) }}" class="btn btn-sm btn-outline-secondary" target="_blank">Photo(s) de l'utilisateur</a>
                                                </div>
                                                @break
                                            @endif
                                        @endforeach
                                        <small class="text-muted">{{$review->created_at}}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-md-9">
                        <div class="card mb-4">
                            <div class="card-body">
                                <p class="card-text">Aucun commentaire dans cette section</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop
@section('script')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
@stop
