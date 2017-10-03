@extends('layouts.manage')

@section('content')
@if (Session::has('danger'))
    <div class="alert alert-info">{{ Session::get('danger') }}</div>
@endif
    <div class="container-fluid">
        <div class="side-body">
           <h1>Create A New User</h1><br><br>
           <div class="container">
			  <form action="{{ url('manage/users/store') }}" method="POST">
			  	<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
			  	<div class="form-group row">
			      <label for="inputname" class="col-sm-2 col-form-label">Name</label>
			      <div class="col-sm-6">
			        <input type="text" name="name" class="form-control" id="inputname" placeholder="Name">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			      <div class="col-sm-6">
			        <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
			      <div class="col-sm-6">
			        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
			      </div>
			    </div>
			    <div class="form-group row">
			      <div class="col-sm-6">
			        <button type="submit" class="btn btn-primary">Create User</button>
			      </div>
			    </div>
			  </form>
			</div>
			           
			           

        </div>
    </div>
@endsection
@section('script')
	<script>
		var app = new Vue({
			el: '#app',
			data: {
				auto_password: true;
			}
		});
	</script>
@endsection