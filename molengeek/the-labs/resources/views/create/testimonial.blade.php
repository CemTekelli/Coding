@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><strong>Testimonial </strong> create :</div>
                @if(\Session::has('success'))
                    <div class='alert alert-success text-center'>
                        {{\Session::get('success')}}
                    </div>
                @endif
                <div class="container">
                    <div class="d-flex justify-content-center m-5">

                        <div class="w-100 border bg-light p-5">
                            <form action="/testimonial" method="POST" enctype="multipart/form-data">
                                @csrf



                                <div class="form-group d-flex">
                                    <div class="w-50">
                                        <label id="Name" for="">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" id="Name"
                                            placeholder="Prénom">
                                        @error('prenom')
                                            <div class='alert alert-danger'>
                                                {{$message}}
                                            </div>
                                        @enderror

                                    </div> 

                                    &nbsp; &nbsp;
                                    <div class="w-50">
                                        <label id="Name" for="">Nom de famille</label>
                                        <input type="text" class="form-control" name="nom" id="Name"
                                            placeholder="Nom">
                                            @error('nom')
                                            <div class='alert alert-danger'>
                                                {{$message}}
                                            </div>
                                            @enderror

                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Post</label>
                                    <input type="text" class="form-control" name="post" id="" placeholder="Son post">
                                    @error('post')
                                        <div class='alert alert-danger'>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label for="hello">Commentaire</label>
                                    <textarea class="form-control" id="hello" name="commentaire" cols="50" rows="4"
                                        placeholder="Le commementaire"></textarea>
                                        @error('commentaire')
                                            <div class='alert alert-danger'>
                                                {{$message}}
                                            </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Ajout image
                                    </button>
                                    @error('img_path')
                                        <div class='alert alert-danger mt-2'>
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div class="collapse" id="collapseExample">
                                    <div class="card card-body">
                                        <label for="inputFile">Upload</label>
                                        <input type="file" name="img_path" id="inputFile">
                                    </div>
                                </div>

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