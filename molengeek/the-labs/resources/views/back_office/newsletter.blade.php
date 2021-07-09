@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="card section">
        <div class="card-body">
           
            <h3>Nombres de personnes incrite aux Newsletter : <strong>{{count($newsletters) + count($users)}}</strong></h3>
            <div class="row">
                <div class="col-6">
                    <h5 class="p-2" >La liste sans compte (<strong>{{count($newsletters)}}</strong>) :</h5 >
                        @foreach ($newsletters as $newsletter)
                     <p class="border p-2">(<span>{{$newsletter->id}}</span>) {{$newsletter->email}}</p> 
                        @endforeach
        
                </div>
                <div class="col-6">
                    <h5 class="p-2" >La liste avec compte (<strong>{{count($users)}}</strong>):</h5 >
                        @foreach ($users as $user)
                    <p class="border p-2">(<span>{{$user->id}}</span>) {{$user->name}}  &nbsp; &nbsp; {{$user->email}}</p> 
                        @endforeach
        
                </div>
            </div>
           
        </div>
    </div>
</div>
@endsection