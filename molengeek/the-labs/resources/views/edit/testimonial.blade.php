@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Testimonail </strong> ajout :</div>

                <div class="container">
                    <div class="d-flex justify-content-center m-5">

                        <div class="w-100 border bg-light p-5">
                        <form action="/testimonial/{{$testimonial->id}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')     
                                <div class="form-group d-flex">
                                    <div class="w-50">
                                        <label id="Name" for="">Prénom</label>
                                        <input type="text" class="form-control" value="{{$testimonial->prenom}}" name="prenom" id="Name"
                                            placeholder="Prénom">

                                    </div> &nbsp; &nbsp;
                                    <div class="w-50">
                                        <label id="Name" for="">Nom de famille</label>
                                        <input type="text" class="form-control" value="{{$testimonial->nom}}" name="nom" id="Name"
                                            placeholder="Nom">

                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Post</label>
                                    <input type="text" class="form-control" value="{{$testimonial->post}}" name="post" id="" placeholder="Son post">
                                </div>
                                <div class="form-group">
                                    <label for="hello">Commentaire</label>
                                    <textarea class="form-control" id="hello" name="commentaire" cols="50" rows="4"
                                        placeholder="Le commementaire">{{$testimonial->commentaire}}"</textarea>

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ajout image
                                    </button>
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <label for="inputFile">Upload</label>
                                        <input type="file" name="img_path" id="inputFile">
                                    </div>
                                </div>


                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{  $error  }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                @endif


                                <div class="d-flex justify-content-center mt-5">
                                    <a class="btn btn-secondary mr-2" href="/testimonial">Back</a>
                                    <button class="btn btn-success" type="submit">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection