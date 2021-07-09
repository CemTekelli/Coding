@extends('adminlte::page')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <div class="register-logo ">
            <img src="/img/logo.png" alt="">
        </div> 
        <div class="card  register-card-body" style="width: 30rem;">
            <div class="card-body">
              <h3 class="text-center mb-2">Reset Password</h3> 
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

                <form action="/password/{{Auth::user()->id}}/reset" action="post">
                    @csrf
                    <div class="form-group">
                        <label>New password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Confirm new password</label>
                        <input name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-info btn-rounded btn ">
                        Valider
                    </button>
                
                </form>
            </div>
          </div>
    </div>
@endsection