@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-2">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Section Team </h5>
    </div>
</div>
<div class="d-flex justify-content-center mb-3">
    <a href="/team/create" class="btn btn-info">Ajouter un membre</a>    
</div>
    <p class="text-center"><strong><em>Quand vous editez ou créer, n'oubliez pas de mettre un membre en "Ceo" pour 'quil s'affiche comme demandé. <br> PS: veuillez mettre au maximum un Ceo et ne l'oubliez pas au risque d'avoir une erreur</em></strong></p>
    <div class="container">

    @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
    @endif
    <div class="row">
        @foreach($teams as $team)
        <div class="card-deck col-4 mb-3  ">
            <div class="card">
                @if (Storage::disk('public')->has($team->img_url))
                    <img width="200px" class="border rounded-rounded mx-auto mt-2"src="{{asset('storage/'.$team->img_url)}}" alt="Card image cap">
                @else 
                    <img width="200px" class="border rounded-rounded mx-auto mt-2"src="{{$team->img_url}}" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h5 class="card-title"> {{$team->prenom}} {{$team->nom}}</h5>
                    <p class="card-text"><small  class="text-muted"> <strong>Post:</strong> {{$team->post}}</small></p>
                </div>
                <div class="card-body">                               
                    <div class="d-flex justify-content-center">
                        <a href="/team/{{$team->id}}/edit" class="btn btn-info m-2">Edit</a>
                        
                        <form action="team/{{$team->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                        </form>
                    </div>                            
                </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>

@endsection