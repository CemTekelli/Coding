@extends('adminlte::page')

@section('content')
    <div class="container card section">
        <div class="card-body">
            @foreach ($articles as $article)
            <div class="border border-rounded">
                <h2>{{$article->titre}}</h2>
            </div>
                
            @endforeach
        </div>
    </div>
@endsection