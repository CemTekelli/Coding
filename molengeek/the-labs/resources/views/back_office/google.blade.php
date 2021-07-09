@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="card w-50 ">
        <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Google Maps</h5>
    </div>
</div>

<div class="card section container">
    @if(\Session::has('success'))
    <div class='alert alert-success text-center'>
        {{\Session::get('success')}}
    </div>
    @endif
    
    <div class="card-body">
        <form action="/google/{{$google->id}}" method="POST">
            @csrf
            @method('put')

            <div class="form-group mb-4">
                <label for="">Rue et n° / Nom de l'endroit</label>
                <input class="form-control" value="{{$google->rue}}" name="rue" type="text"
                    placeholder="La rue ou le Nom de l'endroit">
            </div>
            <div class="form-group mb-4">
                <label for="">Ville</label>
                <input class="form-control" value="{{$google->ville}}" name="ville" type="text" placeholder="La ville">
            </div>
            <div class="form-group mb-4">
                <label for="">Pays</label>
                <input class="form-control" value="{{$google->pays}}" name="pays" type="text" placeholder="Le pays">
            </div>
            <div class="d-flex justify-content-center mt-5">
                <button class="btn btn-success" type="submit">Modifier</button>
            </div>

        </form>
    </div>
    @if ($errors->any())
        <div  class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{  $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection