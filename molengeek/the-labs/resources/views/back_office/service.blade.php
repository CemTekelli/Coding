@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-2">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Service edit</h5>
    </div>
</div>
<div class="d-flex justify-content-center mb-3">
     <a href="/seervice/create" class="btn btn-info">Ajouter un service</a>    
</div>
<div class="container">
    @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
    @endif
   
    <div class="row">
        @foreach($services as $service)
        <div class="card-deck col-3 mb-3  ">
            <div class="card ">
                <div class="d-flex justify-content-center">
                    <i  class="{{$service->icon->icon}} fa-5x"></i>
                </div>

                <div class="card-body">
                    <h5 class="card-title "> {{$service->titre}}</h5>
                    <p class="card-text mt-5"> {{$service->description}}</p>
                </div>
                <div class="card-body">                               
                    <div class="d-flex justify-content-center">
                        <a href="/seervice/{{$service->id}}/edit" class="btn btn-info mr-2">Edit</a>
                        
                        <form action="seervice/{{$service->id}}" method="post">
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