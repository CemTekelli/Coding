@extends('adminlte::page')

@section('content')


<!-- Main layout -->
<main>
    <div class="container-fluid">

        <!-- Section: Edit Account -->
        <section class="section">
            <!-- First row -->
            <div class="row">
                <!-- First column -->
                <div class="col-lg-4 mb-4">

                    <!-- Card -->
                    <div class="card card-cascade narrower">

                        <!-- Card image -->
                        <div class="d-flex justify-content-center">
                            <div class="card w-75 ">
                                <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Edit Photo
                                </h5>
                            </div>

                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body text-center">
                            @if(\Session::has('img'))
                                <div class='alert alert-success text-center'>
                                    {{\Session::get('img')}}
                                </div>
                            @endif
                            @if (Storage::disk('public')->has(Auth::user()->img_profil))
                                <img width="40%" class="shadow-lg p-1 rounded mb-3 mx-auto"
                                  src="{{asset('storage/'.Auth::user()->img_profil)}}" alt="">
                              @else
                                 <img width="40%" class="shadow-lg p-1 rounded mb-3 mx-auto"
                                  src="{{Auth::user()->img_profil}}" alt="">
                                  {{-- {{dd(Auth::user()->img_profil)}} --}}
                                  
                              @endif

                            <p class="text-muted"><small>Profile photo will be changed automatically</small></p>
                            {{-- <form action="/profil/{{Auth::user()->id}}" method="post">
                              @csrf
                              @method('delete')
                                <button class="btn btn-danger btn-rounded btn-sm mb-3">Delete</button>
                            </form> --}}
                            <form action="/profil/{{Auth::user()->id}}/img" method="post" enctype="multipart/form-data">
                              @csrf
                                <button class="btn btn-info btn-rounded btn-sm " type="button" data-toggle="collapse"
                                    data-target="#collapseExample" aria-expanded="false"
                                    aria-controls="collapseExample">
                                    Upload New Photo
                                </button>

                                <div class="collapse " id="collapseExample">
                                    <div class="card card-body">
                                        <label for="inputFile">Upload</label>
                                        <input type="file" name="img_path" id="inputFile">
                                    </div>
                                    <button class="btn btn-info btn-rounded btn-sm" type="submit">valider</button>
                                </div>
                            </form>
   

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- First column -->

                <!-- Second column -->
                <div class="col-lg-8 mb-4">

                    <!-- Card -->
                    <div class="card ">

                        <!-- Card image -->
                        <div class="d-flex justify-content-center">
                            <div class="card w-75 ">
                                <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Edit
                                    Account</h5>
                            </div>

                        </div>
                        <!-- Card image -->

                        <!-- Card content -->
                        <div class="card-body card-body-cascade text-center">

                            <!-- Edit Form -->
                            <form action="/profil/{{Auth::user()->id}}" method="POST">
                                {{-- {{dd(Auth::user())}} --}}
                                @csrf
                                @method('put')
                                <!-- First row -->

                                <div class="row">

                                    <!-- First column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="form1" data-error="wrong" data-success="right">Company</label>
                                            <input  readonly value="Labs Corps." type="text" id="form1"
                                                class="form-control validate" value="">
                                        </div>
                                    </div>
                                    <!-- Second column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="form2" data-error="wrong" data-success="right">Role</label>
                                            <input readonly value="{{Auth::user()->role->name}}" type="text" id="form2"
                                                class="form-control validate">
                                        </div>
                                    </div>
                                </div>
                                <!-- First row -->

                                <!-- First row -->
                                <div class="row">
                                    <!-- First column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="form81" data-error="wrong" data-success="right">
                                                Nom</label>
                                            <input value="{{Auth::user()->name}}" type="text" id="form81" name="name"
                                                class="form-control validate">
                                        </div>
                                    </div>

                                    <!-- Second column -->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="form76">Prenom</label>
                                            <input value="{{Auth::user()->prenom}}" type="text" id="form76" name="prenom"
                                                class="form-control validate">
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                    <div class="col-6">
                                        <div class="md-form mb-0">
                                            <label for="form76">Email address</label>
                                            <input value="{{Auth::user()->email}}" type="email" id="form76" name="email"
                                                class="form-control validate">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="md-form mb-0">
                                            <label for="form76">Password</label>
                                            <input disabled value="{{Auth::user()->password}}" type="password" id="form76" name="password"
                                                class="form-control validate">
                                        </div>
                                    </div>
                                </div>
                                <!-- First row -->

                                <!-- Second row -->
                                <div class="row">

                                    <!-- First column -->

                                    <!-- Second column -->

                                    <div class="col-12">
                                        <div class="form-group">
                                            @if (Auth::user()->description === "")
                                            <label for="hello">Description</label>
                                            <textarea class="form-control" id="hello" name="description" cols="50"
                                                rows="4" placeholder="Mettre à jour votre description "></textarea>

                                            @endif
                                            <label for="hello">Description</label>
                                            <textarea class="form-control" id="hello" name="description" cols="50"
                                                rows="4"
                                                placeholder="Mettre à jour votre description (Facultatif)">{{Auth::user()->description}}</textarea>
                                        </div>

                                    </div>
                                </div>
                                <!-- Second row -->

                                <!-- Third row -->
                                <div class="row">

                                    <!-- First column -->

                                </div>
                                <!-- Third row -->
                                @if(\Session::has('success'))
                                <div class='alert alert-success text-center'>
                                    {{\Session::get('success')}}
                                </div>
                                @endif
                                <!-- Fourth row -->
                                <div class="row">
                                    <div class="col-md-12 text-center my-4">
                                        <input type="submit" value="Update Account" class="btn btn-info btn-rounded">
                                    </div>
                                </div>
                                <!-- Fourth row -->

                            </form>
                            <!-- Edit Form -->

                        </div>
                        <!-- Card content -->

                    </div>
                    <!-- Card -->

                </div>
                <!-- Second column -->

            </div>
            <!-- First row -->

        </section>
        <!-- Section: Edit Account -->

    </div>

</main>

{{-- <div class="conntainer card section">
    <div class="card-body">
        <h3>Les membres : </h3>
        @foreach ($users as $user)
        <p>(<span>{{$user->id}}</span>) &nbsp;{{$user->name}}<span> &nbsp;
                &nbsp;<strong>Roles:</strong>{{$user->role->name}}</span></p>
        @endforeach
    </div>
</div> --}}

@endsection