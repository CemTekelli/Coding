@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-2">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Section Article</h5>
    </div>
</div>
<div class="d-flex justify-content-center mb-3">
    @can('create', App\User::class)
        <a href="/article/create" class="btn btn-info">Ajouter un article</a>    
    @endcan
</div>
<div class="container-fluid">
                    {{-- {{dd($article->user)}} --}}

    @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
    @endif
    <div class="row">
        @foreach($articles as $article)
        <div class="card-deck col-4 mb-3  ">
            <div class="card ">
                <div class="d-flex justify-content-center">
                @if (Storage::disk('public')->has($article->img_article))
                    <img class="border rounded-rounded mx-auto mt-2" src=" {{asset('storage/'.$article->img_article)}}" alt="">
                @else 
                    <img class="border rounded-rounded mx-auto mt-2" src=" {{$article->img_article}}" alt="">
                @endif
                   
                </div>
                
                <div class="card-body mt-4">
                    @if ($article->accepter == "check")
                         <h5 class="text-center"> <strong> WebMaster décision : {{$article->accepter}} &nbsp;</strong>  <i class="fas fa-check-square text-info"></i></h5>
                    @else
                    <h5 class="text-center"> <strong> WebMaster décision : NoCheck</strong> <i class="fas fa-window-close text-danger"></i></h5>
                    @endif
                    <h5 class="card-title mt-3 "> <strong>Titre :</strong> {{$article->titre}}</h5> <br><br>
                    <p><strong>Description :</strong>{{\Str::limit($article->text, 70, $end='...') }}.</p>
                    <p class="card-text mt-1"> <strong>Date de création :</strong> {{$article->date}}</p>
                    <p class="card-text mt-1"> <strong>Auteur :</strong> {{$article->user->name}}</p>
                    <p class="card-text mt-1"> <strong>Categories :</strong> 
                        @foreach ($article->categories as $categorie)
                        {{$categorie->name}} 
                        @endforeach</p>
                    <p class="card-text mt-1"> <strong>Tags :</strong> 
                        @foreach ($article->tags as $tag)
                        {{$tag->name}}
                        @endforeach
                    </p>
                </div>
                <div class="card-body">                               
                    <div class="d-flex justify-content-center">
                        @can('update', App\User::class)
                        <a href="/article/{{$article->id}}/edit" class="btn btn-info mr-2">Edit</a>
                        @endcan
                        
                        <form action="article/{{$article->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger ">Delete</button>
                        </form>
                    </div>                            
                </div>
            </div> 
        </div>
        @endforeach
    </div>
</div>

@endsection