@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header"><strong>Article </strong> edit:</div>
                @if ($errors->any())
                    <div  class='alert alert-danger'>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{  $error  }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="/article/{{$article->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                     
           
                        <div class="form-group mb-4 mt-2">
                            <label for="">Titre</label>
                            <input type="text" class="form-control" value="{{$article->titre}}" name="titre" id=""
                                placeholder="Titre du article">
                        </div>
                   
                        <div class="form-group">
                            <label for="hello">Description</label>
                            <textarea class="form-control" id="hello" name="text" cols="50" rows="12"
                                placeholder="Description du article">{{$article->text}}</textarea>

                        </div>
                        <div class="text-center mt-4">
                            <p><strong>Vos Tags :</strong>
                                @foreach ($article->tags as $tag)
                                    {{$tag->name}}
                                @endforeach
                            </p>
                        </div>
                        <label for="">Tags</label> <br>
                        <select multiple name='tag_id[]' class="browser-default custom-select">
                            @foreach ($tags as $tag)

                            <option {{$tag->id == $article->tags_id ? 'selected' : ''}} value='{{$tag->id}}'>
                                {{$tag->name}}
                            </option>
                            
                            @endforeach

                        </select>
                        <div class="text-center mt-4">
                            <p><strong>Vos categories :</strong>
                                @foreach ($article->categories as $categorie)
                                    {{$categorie->name}}
                                @endforeach
                            </p>
                        </div>
                        <label  for="">Categories</label> <br>
                        <select multiple name='categorie_id[]' class="browser-default custom-select">
                            @foreach ($categories as $categorie)
                            <option  value='{{$categorie->id}}'>
                                {{$categorie->name}}
                            </option>
                            @endforeach
                        </select> 

                        <div class="mt-3">
                            <div class=" form-group">
                                <button class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Modifier image
                                </button>
                            </div>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <label for="inputFile">Upload</label>
                                    <input type="file" name="img_path" id="inputFile">
                                </div>
                            </div>
                        </div>
                        @webmaster
                        <div class="form-check text-center">
                            <input {{$article->accepter == "check" ? "checked" : ""}} name="check"  type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Publier l'artcile</label>
                        </div>
                        @endwebmaster
                        @webmaster
                        <div class="form-check text-center">
                            <input name="news"  type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Enovyer un Newsletter</label>
                        </div>
                        @endwebmaster
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