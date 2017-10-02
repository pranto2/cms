@extends('layouts.manage')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
           <h1> {{$user->name}} </h1>
           <h1 class="subtitle">View User Detail</h1>
           <br><br>
           <h3> {{$user->name}} <span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i>
			</span></h3>
           <h3> {{$user->email}} <span class="label label-default"><i class="fa fa-envelope" aria-hidden="true"></i>
			</span></h3>
        </div>
    </div>
@endsection