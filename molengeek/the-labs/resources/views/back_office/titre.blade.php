@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><strong>Titre</strong> edit :</div>
    
                    <div class="container-fluid">
                        @if(\Session::has('success'))
                            <div class='alert alert-success text-center'>
                                {{\Session::get('success')}}
                            </div>
                        @endif
                        <div  class="d-flex justify-content-center m-5">
                            <div  class="w-100 border bg-light p-5">
                                <form  action="/titre/{{$titre->id}}"  method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <p class="text-center font-italic"> <strong>Astuce</strong> : Mettez entre (  ) pour surgliner un mot au choix !</p>
                                        <h5 class="text-center">Section HOME</h5>
                                        
                                            <div  class="form-group mb-4 ">
                                                <label  for="">Titre About.</label>
                                                <input  type="text" class="form-control" value="{{$titre->about_titre}}" name="about_titre"  id=""  placeholder="Nom && Prénom">
                                            </div>      
                                                           
                                        
                                        
                                            <div  class="form-group mb-4 ">
                                                <label  for="">Titre Testimonial.</label>
                                                <input  type="text" class="form-control" value="{{$titre->testimonial_titre}}" name="testimonial_titre"  id=""  placeholder="Nom && Prénom">
                                            </div> 
                               
                                        

                                        
                                            <div  class="form-group mb-4 ">
                                                <label  for="">Titre Service.</label>
                                                <input  type="text" class="form-control" value="{{$titre->service_titre}}" name="service_titre"  id=""  placeholder="Nom && Prénom">
                                            </div> 
                            
                                        

                                        
                     
                                            <div  class="form-group mb-4 ">
                                                <label  for="">Titre Team.</label>
                                                <input  type="text" class="form-control" value="{{$titre->team_titre}}" name="team_titre"  id=""  placeholder="Nom && Prénom">
                                            </div> 
                 
                                        
     
                                                           
                                            <div  class="form-group mb-4 ">
                                                <label  for="">Titre Contact.</label>
                                                <input  type="text" class="form-control" value="{{$titre->contact_titre}}" name="contact_titre"  id=""  placeholder="Nom && Prénom">
                                            </div>   
                     
                                         
                                                <h5 class="text-center">Section SERVICE</h5>
                                                           
                                            <div  class="form-group mb-4">
                                                <label  for="">Titre Service Primé.</label>
                                                <input  type="text" class="form-control" value="{{$titre->servicePrime_titre}}" name="servicePrime_titre"  id=""  placeholder="Nom && Prénom">
                                            </div>      
                
                                      
                     

                                           
                                        @if ($errors->any())
                                            <div  class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{  $error  }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        
                                        @endif
    
                                        
                                        <div class="d-flex justify-content-end mt-2">
                                            <button  class="btn btn-info" type="submit">Upload</button>
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