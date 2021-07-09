@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="card w-50 ">
        <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Footer</h5>
    </div>
</div>

<div class="card section container">
    @if(\Session::has('success'))
    <div class='alert alert-success text-center'>
        {{\Session::get('success')}}
    </div>
    @endif
    
    <div class="card-body">
        <form action="/footer/{{$footer->id}}" method="POST">
            @csrf
            @method('put')

            <div class="form-group mb-4">
                <label for="">Zone texte</label>
                <input class="form-control" value="{{$footer->text}}" name="footer" type="text"
                    placeholder="Zone de texte">
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