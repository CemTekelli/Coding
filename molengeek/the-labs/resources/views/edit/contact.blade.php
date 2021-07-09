@extends('adminlte::page')

@section('content')
<div class="d-flex justify-content-center mb-4">
    <div class="card w-50 ">
      <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">Forum Contact</h5>
    </div>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-header mb-4"><strong>Contact </strong> edit:</div>

                <div class="container">
                    @if(\Session::has('success'))
                        <div class='alert alert-success text-center'>
                            {{\Session::get('success')}}
                        </div>
                    @endif

                    <form action="/contaact/{{$contact->id}}" method="POST">
                        @csrf
                        @method('put')


                        <div class="form-group mb-4">
                            <label for="">Sous-titre</label>
                            <input type="text" class="form-control" value="{{$contact->titre2}}" name="titre2" id=""
                                placeholder="Sous-titre">
                        </div>

                    

                        <div class="row d-flex ">
                            
                            <div class="mb-4 col-6">
                                <label for="">Mini-titre</label>
                                <input type="text" class="form-control w-100" value="{{$contact->titre3}}" name="titre3" id=""
                                    placeholder="Mini-titre">
                            </div>
                            <div class=" mb-4 col-6">
                                <label for="">Votre mail</label>
                                <input type="text" class="form-control w-100" value="{{$contact->mail}}" name="mail" id=""
                                    placeholder="Mail">
                            </div>

                        </div>

                        <div class="row d-flex ">
                            
                            <div class="mb-4 col-6">
                                <label for="">Ville</label>
                                <input type="text" class="form-control w-100" value="{{$contact->ville}}" name="ville" id=""
                                    placeholder="Votre ville">
                            </div>
                            <div class=" mb-4 col-6">
                                <label for="">Rue et N°</label>
                                <input type="text" class="form-control w-100" value="{{$contact->rue}}" name="rue" id=""
                                    placeholder="Votre rue et n°">
                            </div>

                        </div>
                        <div class="row d-flex ">
                            
                            <div class="col-6">
                                <label for="">Numéro de téléphone</label>
                                <input type="text" class="form-control w-100" value="{{$contact->phone}}" name="phone" id=""
                                    placeholder="Numéro de téléphone">
                            </div>

                            <div class="col-6">
                                <label for="">Nom du Button</label>
                                <input type="text" class="form-control w-100" value="{{$contact->button}}" name="button" id=""
                                    placeholder="Nom du Button">
                            </div>

                        </div>

                        @if ($errors->any())
                            <div  class='alert alert-danger mt-3'>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{  $error  }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="d-flex justify-content-center mt-5">
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