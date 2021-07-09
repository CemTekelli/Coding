@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Home Banner Edit</h5>
    </div>
</div>
        @if(\Session::has('success'))
            <div class='alert alert-success text-center'>
                {{\Session::get('success')}}
            </div>
        @endif
        {{-- SLOGAN et LOGO --}}
    <div class="section card container">
        <div class="card mt-2">

            <div class="card-body">
                <h3 class="text-center mt-2">SLogan et Logo</h3>
                @if(\Session::has('successLogo'))
                <div class='alert alert-success text-center'>
                    {{\Session::get('successLogo')}}
                </div>
                @endif
                @if(\Session::has('successSlogan'))
                <div class='alert alert-success text-center'>
                    {{\Session::get('successSlogan')}}
                </div>
                @endif
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-info mr-3" data-toggle="modal" data-target="#exampleModalCenter">
                        Editer Slogan
                    </button>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModaalCenter">
                        Editer Logo
                     </button>
                    
                </div>
                <div class="row mb-5 mt-3">
                    <div class="card-body col-6 ">
                        <p class="font-italic float-right"> " {{$slogan->slogan}} "</p>
                    </div>
                    <div class="card-body col-6">
                        @if (Storage::disk('public')->has($logo->url_logo))
                        <img width="120px" src="{{asset('storage/'.$logo->url_logo)}}" alt="">
                        @else 
                        <img width="120px" src="{{$logo->url_logo}}" alt="">
                        @endif
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        @if(\Session::has('succes'))
        <div class='alert alert-success text-center mt-2'>
            {{\Session::get('succes')}}
        </div>
        @endif
        @if(\Session::has('succe'))
        <div class='alert alert-success text-center mt-2'>
            {{\Session::get('succe')}}
        </div>
        @endif
        
            {{-- SLIDE IMG --}}
        <div class="card">
            
            <div class=" text-center">
                <h3 class="text-center mt-3">Slide image</h3>
                <a href="/banner/create" class="btn btn-info">Ajouter une image</a>    
            </div>
                <div class="card-body row">
                    @foreach ($banners as $banner)
                    
                        <div class="card col-3 p-1" style="width: 18rem;">
                            @if (Storage::disk('public')->has($banner->slide_img))
                                <img class="card-img-top" width="200px" src="{{asset('storage/'.$banner->slide_img)}}" alt="">
                            @else 
                                <img class="card-img-top" width="200px" src="{{$banner->slide_img}}" alt="">
                            @endif
                            <div class="card-body">                               
                                <div class="d-flex justify-content-center">
                                    <a href="/banner/{{$banner->id}}/edit" class="btn btn-info m-2">Edit</a>
                                    
                                    <form action="banner/{{$banner->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger m-2">Delete</button>
                                    </form>
                                </div>                            
                            </div>
                          </div>                        
                   
                    
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>
  
        <!-- Modal LOGO-->
        <div class="modal fade" id="exampleModaalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Logo Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
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
        
        <!-- Modal SLOGAN -->
        <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Slogan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body w-100">
                        <form  action="/slogan/{{$slogan->id}}"  method="POST" enctype="multipart/form-data" >
                            @csrf
                    {{-- @method('put')      --}}
                        <div  class="form-group">
                            <label id="Name"  for="">Slogan</label>
                            <input  type="text" value="{{$slogan->slogan}}" class="form-control"  name="slogan"  id="Name"    placeholder="Slogan">
                        </div>        

                        <div class="modal-footer">
                            <button  class="btn btn-success" type="submit">Upload</button>
                        </div>
                </form>
            </div>
      </div>
    </div>

@endsection