@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header"><strong>Ready </strong> edit:</div>

                <div class="container">
                    @if(\Session::has('success'))
                        <div class='alert alert-success text-center'>
                            {{\Session::get('success')}}
                        </div>
                    @endif

                    <form action="/ready/{{$ready->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <div class="form-group mb-4">
                            <label for="">Titre</label>
                            <input type="text" class="form-control" value="{{$ready->titre}}" name="titre" id=""
                                placeholder="Titre">
                        </div>
                        <div class="form-group">
                            <label for="hello">Sous-titre</label>
                            <textarea class="form-control" id="hello" name="titre2" cols="50" rows="4"
                                placeholder="Sous-titre">{{$ready->titre2}}</textarea>

                        </div>
                        <div class="form-group mb-4">
                            <label for="">Nom du Button</label>
                            <input type="text" class="form-control" value="{{$ready->button}}" name="button" id=""
                                placeholder="Nom du Button">
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-success" type="submit">Upload</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>


@endsection