@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header">
                    <strong>Article </strong> Create: <br> <br>Vous êtes l'auteur  <strong><em>  {{Auth::user()->name}}</em></strong> 
                </div>
 
                  {{-- <div class="form-check">
                    <input type="checkbox" name="test" class="form-check-input" id="materialUnchecked">
                    <label class="form-check-label" for="materialUnchecked">Publier l'article</label>
                </div> --}}
                @if ($errors->any())
                    <div  class='alert alert-danger'>
                        <ul>
                            @foreach ($errors->all() as $error) 
                                <li>{{  $error  }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="/article" method="POST" enctype="multipart/form-data">
                        @csrf 

                        <div class="row d-flex mt-2">
                            <div class="form-group mb-4 col-8">
                                <label for="">Titre</label>
                                <input type="text" class="form-control"  name="titre" id=""
                                    placeholder="Titre du article">
                            </div>
                            <div class="form-group mb-4 col-4">
                                <label for="">Date</label>
                                <input type="date" class="form-control"  name="date" id=""
                                    placeholder="Titre de la date">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="hello">Description</label>
                            <textarea class="form-control" id="hello" name="text"  cols="50" rows="12"
                                placeholder="Description du article"></textarea>

                        </div>
         
                        <label for="">Tags</label> <br>
                        <select multiple name='tag_id[]' class="browser-default custom-select">
                            @foreach ($tags as $tag)
                            <option  value='{{$tag->id}}'>
                                {{$tag->name}}
                            </option>
                            @endforeach
                        </select>

                        <label  for="">Categories</label> <br>
                        <select multiple name='categorie_id[]' class="browser-default custom-select">
                            @foreach ($categories as $categorie)
                            <option value='{{$categorie->id}}'>
                                {{$categorie->name}}
                            </option>
                            @endforeach
                        </select> 

                        <div class="mt-3">
                            <div class=" form-group">
                                <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Ajouter image
                                </button>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <label for="inputFile">Upload</label>
                                    <input type="file" name="img_path" id="inputFile">
                                </div>
                            </div>
                        </div>
                    
                        <div class="d-flex justify-content-center mt-5">
                            <a class="btn btn-secondary mr-2" href="/article">Back</a>
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