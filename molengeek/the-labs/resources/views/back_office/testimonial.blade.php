@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-2">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Testimonials edit</h5>
    </div>
</div>
<div class="d-flex justify-content-center mb-3">
     <a href="/testimonial/create" class="btn btn-info">Ajouter un Testimonial</a>    
</div>
<div class="container">
    @if(\Session::has('sucess'))
        <div class='alert alert-success text-center'>
            {{\Session::get('sucess')}}
        </div>
    @endif
    <div class="row">
        @foreach($testimonials as $testimonial)
        <div class="card-deck col-3 mb-3  ">
            <div class="card">
                @if (Storage::disk('public')->has($testimonial->img_url))
                    <img width="120px" class="border rounded-circle mx-auto mt-2"src="{{asset('storage/'.$testimonial->img_url)}}" alt="Card image cap">
                @else 
                    <img width="120px" class="border rounded-circle mx-auto mt-2"src="{{$testimonial->img_url}}" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h5 class="card-title"> {{$testimonial->prenom}} {{$testimonial->nom}}</h5>
                    <p class="card-text"> {{$testimonial->commentaire}}</p>
                    <p class="card-text"><small class="text-muted">{{$testimonial->post}}</small></p>
                </div>
                <div class="card-body">                               
                    <div class="d-flex justify-content-center">
                        <a href="/testimonial/{{$testimonial->id}}/edit" class="btn btn-info m-2">Edit</a>
                        
                        <form action="testimonial/{{$testimonial->id}}" method="post">
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