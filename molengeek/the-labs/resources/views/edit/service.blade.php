@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header"><strong>Service </strong> edit:</div>

                <div class="container">

                    <form action="/seervice/{{$service->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        {{-- <div class="form-group mb-4">
                            
                            <i  class="{{$service->icon->icon}} fa-5x"></i>
                            
                        </div> --}}
                <label class="mt-4" for="">Icon</label> <br>
                <select name='icon_id' onchange="afficher(this)" class="browser-default custom-select">
                    @foreach ($icons as $icon)
                         <option {{$icon->id == $service->icon_id ? 'selected' : ''}} value='{{$icon->id}}'>
                            {{$icon->icon}}
                        </option>   
                    @endforeach
                </select>
                <div class="container mt-2">
                    <div class="row d-flex">
                        <div class="col-6 d-flex flex-column align-items-center">
                            <h4>Votre icon actuelle </h4>
                            <i class="fa-5x {{$service->icon->icon}}"></i>
                        </div>
                        <div class="col-6 d-flex flex-column align-items-center">
                            <h4>Votre nouveau Icon (<em>Optionnelle</em>)</h4>
                            <div id="titre" style="font-size:80px;"></div>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="">Titre</label>
                    <input type="text" class="form-control" value="{{$service->titre}}" name="titre" id=""
                        placeholder="Titre du service">
                </div>
                <div class="form-group">
                    <label for="hello">Description</label>
                    <textarea class="form-control" id="hello" name="description" cols="50" rows="4"
                        placeholder="Description du service">{{$service->description}}</textarea>

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
                    <a class="btn btn-secondary mr-2" href="/seervice">Back</a>
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