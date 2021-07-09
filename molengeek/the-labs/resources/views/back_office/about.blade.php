@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-2">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">About Edit</h5>
    </div>
</div>
<div class="d-flex justify-content-center mb-3">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-lg">Editer la partie Présentation
    </button>

</div>
    <div class="container card">
        <div class="card-body">
            @if(\Session::has('success'))
            <div class='alert alert-success text-center'>
                {{\Session::get('success')}}
            </div>
        @endif
        @if ($errors->any())
            <div  class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{  $error  }}</li>
                    @endforeach
                </ul>
            </div>
        @endif	
            <p class="mb-0"><strong>Description coté gauche:</strong></p>
            <p class="border-bottom">{{$presentation->description1}}</p>
            <p class="mb-0"><strong>Description coté droite:</strong></p>
            <p class="border-bottom">{{$presentation->description2}}</p>     
            <p class="mb-0"><strong>Button:</strong></p>
            <p class="border-bottom">{{$presentation->button}}</p>
            <div class="d-flex">
                <div class="w-50">
                    <p class="mb-0"><strong>Lien Youtube:</strong></p>
                    <p>{{$presentation->lien}}</p>
                </div>
                <div class="w-50">
                    <p class="mb-0"><strong>Image Video:</strong></p>
                    @if (Storage::disk('public')->has($presentation->img_video))
                        <img width="65%" src="{{asset('storage/'.$presentation->img_video)}}" alt="">

                    @else 
                        <img width="65%" src="{{$presentation->img_video}}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>


    <!-- Large modal PRESENTATION-->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5">
        <form  action="/about/{{$presentation->id}}"  method="POST" enctype="multipart/form-data" >
            @csrf
            @method('put')  
            <h4 class="text-center mt-1 mb-1 border-bottom">About edit</h4>  

                <div  class=" mb-4 d-flex flex-column">
                    <label  for="hello">Déscription coté Gauche</label>
                    <textarea class="form-control" id="hello" name="description1"  cols="50" rows="4" placeholder="description">{{$presentation->description1}}</textarea>
                </div> 
                <div  class=" mb-4 d-flex flex-column">
                    <label  for="hello">Déscription coté Droite</label>
                    <textarea class="form-control" id="hello" name="description2"  cols="50" rows="4" placeholder="description">{{$presentation->description2}}</textarea>
                </div>      
                    
                <div  class="form-group mb-4">
                    <label  for="">Button</label>
                    <input type="text" class="form-control" value="{{$presentation->button}}" name="button"  id=""  placeholder="Button">
                </div>   

                <div  class="form-group mb-4">
                    <label  for="">Lien Youtube</label>
                    <input type="text" class="form-control" value="{{$presentation->lien}}" name="lien"  id=""  placeholder="Lien Youtube">
                </div>   

                <div  class="form-group">
                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                     Editer l'image 
                    </button>
                </div>                          
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <label  for="inputFile">Upload</label>
                            <input  type="file"  name="img_path"  id="inputFile"> 
                        </div>
                    </div>
                <div class="modal-footer">
                    <button  class="btn btn-success" type="submit">Upload</button>
                </div>
        </form>
    </div>
  </div>
</div>

@endsection
