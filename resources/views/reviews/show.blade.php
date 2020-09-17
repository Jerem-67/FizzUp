@extends('layout')
@section('content')
    <div class="album py-5 bg-light">
        <div class="container">
            @foreach($reviews as $review)
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4>Comentaire de {{ $review->name }}:</h4>
                            <h5>Note: {{ $review->rate }}/5</h5>
                            <p class="card-text">{{ $review->content }}</p>
                            @foreach($files as $file)
                                @if($file->reviews_id == $review->id)
                                <a href="{{ asset('uploads/' .$file->fileName) }}" target="_blank"><img class="JK-imgLink" src="{{ asset('uploads/' .$file->fileName) }}" alt=""></a>
                                @endif
                            @endforeach
                                <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{$review->created_at}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
