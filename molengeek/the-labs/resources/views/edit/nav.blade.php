@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">NavBar Edit</h5>
    </div>
</div>
@foreach ($navs as $nav)
      <div class="card container">
        @if(\Session::has('successLogo'))
          <div class='alert alert-success text-center'>
            {{\Session::get('successLogo')}}
          </div>
        @endif

        @if(\Session::has('succes'))
          <div class='alert alert-success text-center'>
            {{\Session::get('succes')}}
          </div>
        @endif
        <div class="card-body d-flex justify-content-around ">
            <p>
                @if (Storage::disk('public')->has($logo->url_logo))
                   <img width="120px" src="{{asset('storage/'.$logo->url_logo)}}" alt="">
                @else 
                 <img width="120px" src="{{$logo->url_logo}}" alt="">
                @endif
            </p>
            <p> {{$nav->name}}</p>
            <p>{{$nav->name2}}</p>
            <p>{{$nav->name3}}</p>
            <p>{{$nav->name4}}</p>
        </div>

    </div>
  
    @endforeach
    <!-- Button trigger modal -->
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalCeenter">
          Editer Logo
        </button>
        <button type="button" class="btn btn-info ml-3" data-toggle="modal" data-target="#exampleModalCenter">
            Editer Navbar
          </button>

    </div>

  
  <!-- Modal -->
  <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Nav edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body w-100">
                <form  action="/nav/{{$nav->id}}"  method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('put')     
                        <div  class="form-group">
                            <label id="Name"  for="">Titre</label>
                            <input  type="text" value="{{$nav->name}}" class="form-control"  name="name"  id="Name"    placeholder="Name">
                        </div>        
                        <div  class="form-group">
                            <label id="Name"  for="">Titre</label>
                            <input  type="text" value="{{$nav->name2}}" class="form-control"  name="name2"  id="Name"    placeholder="Name">
                        </div>        
                        <div  class="form-group">
                            <label id="Name"  for="">Titre</label>
                            <input  type="text" value="{{$nav->name3}}" class="form-control"  name="name3"  id="Name"    placeholder="Name">
                        </div>        
                        <div  class="form-group">
                            <label id="Name"  for="">Titre</label>
                            <input  type="text" value="{{$nav->name4}}" class="form-control"  name="name4"  id="Name"    placeholder="Name">
                        </div>   

                        <div class="modal-footer">
                            <button  class="btn btn-success" type="submit">Upload</button>
                        </div>
                </form>
            </div>
      </div>
    </div>
  </div>
@endsection  

<!-- Modal Logo-->
  <div class="modal fade " id="exampleModalCeenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content modal-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Logo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <div class="modal-body w-100">
                <form  action="/logo/{{$logo->id}}"  method="POST" enctype="multipart/form-data" >
                    @csrf  
                        <div  class="form-group">
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                             Editer la photo
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
  </div>
