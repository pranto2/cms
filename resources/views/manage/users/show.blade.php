@extends('layouts.manage')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
           <h1> {{$user->name}} </h1>
           <h4 class="subtitle">View User Detail</h4>
           <a href="{{'users/edit/'.$user->id}}" type="button" class="btn btn-success">Edit</a>
           <br><br>
           
           <h3>Name: {{$user->name}} <span class="label label-default"><i class="fa fa-user" aria-hidden="true"></i>
			</span></h3>
          
           <h3>Email: {{$user->email}} <span class="label label-default"><i class="fa fa-envelope" aria-hidden="true"></i>
			</span></h3><br><br><br>
      <a href="{{ url('manage/users') }}" type="button" class="btn btn-primary">Back</a>
        </div>

    </div>
@endsection