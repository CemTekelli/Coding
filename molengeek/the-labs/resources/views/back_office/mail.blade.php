@extends('adminlte::page')


@section('content')
<section class="content">
    <div class="container">
        @if(\Session::has('success'))
        <div class='alert alert-success text-center'>
            {{\Session::get('success')}}
        </div>
        @endif
        @if ($errors->any())
        <div class='alert alert-danger'>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{  $error  }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-md-3">

            <div class="card">
                <div class="card-body">
                    <h4>Profil connecté </h4>
                    <h6>Nom : <strong>{{Auth::user()->name}}</strong>  </h6>
                    <h6>Prenom : <strong>{{Auth::user()->prenom}}</strong>  </h6>
                    <h6>Rôle : <strong>{{Auth::user()->role->name}}</strong></h6>
                    <h6>Email : <strong>{{Auth::user()->email}}</strong> </h6>
                    {{-- {{dd(Auth::user())}} --}}

                </div>
            </div>

        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="box box-primary">

                {{-- <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div> --}}
                <div class="card w-25">
                    <h5 class="mb-0 font-weight-bold text-center bg-info shadow p-3 mb-1rounded">MailBox TheLabs</h5>
                </div>


                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover">
                        <tr>
                            {{-- <td>Nbr :</td> --}}
                            <td class="mailbox-name">
                                <a href="read-mail.html">Email </a>
                            </td>
                            <td class="mailbox-subject"><b></b>
                                Sujet:
                            </td>

                            <td class="mailbox-subject pl-5"><b></b>
                                Message:
                            </td>
                            <td class="mailbox-date">Date/heure de l'envoie:</td>
                            <td class="mailbox-date">Action:</td>
                        </tr>
                        @foreach ($mails as $mail)
                        <tbody>

                            <tr>
                                {{-- <td>{{$mail->id}}</td> --}}
                                <td class="mailbox-name">
                                    <a href="#">{{$mail->email}} </a>
                                </td>
                                <td class="mailbox-subject"><b></b>
                                    {{$mail->subject}}
                                </td>
                                <td class="mailbox-subject pl-5"><b></b>
                                    <textarea style="border: none; background: none" readonly name="" id="" cols="40"
                                        rows="3">{{$mail->message}}</textarea>
                                </td>
                                {{-- <td class="mailbox-attachment"></td> --}}
                                <td class="mailbox-date">{{$mail->created_at->format('d/m/Y')}} à
                                    {{$mail->created_at->toTimeString()}} </td>
                                <td class="mailbox-date">
                                    <form action="/mailbox/{{$mail->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger ">Delete</button>
                                    </form>
                                </td>
                            </tr>

                        </tbody>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection