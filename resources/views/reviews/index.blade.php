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
            <div class="row">
                @foreach($reviews as $review)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h4>Comentaire de {{ $review->name }}:</h4>
                                <h5>Note: {{ $review->rate }}/5</h5>
                                <p class="card-text">{{ $review->content }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    </div>
                                    <small class="text-muted">{{$review->created_at}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
