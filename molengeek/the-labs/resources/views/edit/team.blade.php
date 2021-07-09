@extends('adminlte::page')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header"><strong>Team </strong> edit:</div>

                <div class="container">

                    <form action="/team/{{$team->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <div class="row d-flex ">

                            <div class="mb-4 col-6">
                                <label for="">Nom</label>
                                <input type="text" class="form-control w-100" value="{{$team->nom}}" name="nom" id=""
                                    placeholder="Votre nom">
                            </div>
                            <div class=" mb-4 col-6">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control w-100" value="{{$team->prenom}}" name="prenom"
                                    id="" placeholder="Votre Prenom">
                            </div>

                        </div>

                        <div class="form-group mb-4">
                            <label for="">Post</label>
                            <input type="text" class="form-control" value="{{$team->post}}" name="post" id=""
                                placeholder="Votre post"">
                        </div>
                        <div class=" form-group">
                            <button class="btn btn-primary" type="button" data-toggle="collapse"
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
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
                            <a class="btn btn-secondary mr-2" href="/team">Back</a>
                            <button class="btn btn-success" type="submit">Upload</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    function afficher(X) {
        I = X.selectedIndex;
        if (I == 0) {
            titre.className = X.options[I].text;
        }
        titre.className = X.options[I].text;
    }

</script>

@endsection