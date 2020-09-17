@extends('layout')
@section('content')
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Avis des utilisateurs</h1>
            <p class="lead text-muted">Voici ce que les gens penses de nous, n'hésitez pas à donner vôtre avis vous aussi</p>
            <p>
                <a href="{{ URL::route('reviews.create') }}" class="btn btn-primary my-2">Je donne mon avis</a>
            </p>
        </div>
    </section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="text-center">
                @if(Route::current()->uri == 'asc')
                    <a href="{{ URL::route('reviews.index') }}">Trier par date d'ajout desc</a>
                @else
                    <a href="{{ URL::route('reviews.indexAsc') }}">Trier par date d'ajout asc</a>
                @endif
            </div>
            <hr>
            <div class="row justify-content-end">
                <div class="col-md-3">
                    @if(Route::current()->uri == 'asc')
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 5) }}">5etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 4) }}">4etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 3) }}">3etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 2) }}">2etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateAsc', 1) }}">1etoile</a>
                        </div>
                    @else
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 5) }}">5etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 4) }}">4etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 3) }}">3etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 2) }}">2etoile</a>
                        </div>
                        <div class="row">
                            <a href="{{ URL::route('reviews.rateDesc', 1) }}">1etoile</a>
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
                                    <p class="card-text">{{ $review->content }}</p>
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
