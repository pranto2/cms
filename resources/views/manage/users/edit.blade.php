@extends('layouts.manage')

@section('content')
@if (Session::has('danger'))
    <div class="alert alert-info">{{ Session::get('danger') }}</div>
@endif
    <div class="container-fluid">
        <div class="side-body">
           <h1>Update {{$user->name}}'s Profile</h1><br><br>
           <div class="container">
			  <form action=" {{'users/update/'.$user->id}} " method="POST">
			  	{{method_field('PUT')}}
			  	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			  	<div class="form-group row">
			      <label for="inputname" class="col-sm-2 col-form-label">Name</label>
			      <div class="col-sm-6">
			        <input type="text" name="name" class="form-control" id="inputname" value=" {{$user->name}} ">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			      <div class="col-sm-6">
			        <input type="email" name="email" class="form-control" id="inputEmail3" value=" {{$user->email}} ">
			      </div>
			    </div>

			    <div class="form-group row">
			      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
			      <div class="col-sm-6">
			        <input type="password" class="form-control" id="inputPassword3" value=" {{ $user->password}} " >
			      </div>
			    </div>
			    <div class="form-group row">
			      <div class="col-sm-6">
			        <button type="submit" class="btn btn-primary">Update User</button>
			      </div>
			    </div>
			  </form>
			</div>
			           
			           

        </div>
    </div>
@endsection
