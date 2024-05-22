@extends('layouts.app')

@section('content')
    <h1>Comics</h1>

    <section class="card-section">
        <div class="container">
            <div class="row row-gap-4">
                @foreach ($comics as $comic)
                    <div class="col-2">
                        <div class="card">
                            <img src="{{$comic['thumb']}}" class="card-img-top">
                            <div class="card-body text-center">
                                <p class="title">{{ $comic['title'] }}</p>
                                <p>Serie: {{$comic['series']}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
