@extends('layouts.manage')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
           <h1>Create A New User</h1><br><br>
           <div class="container">
			  <form>
			  	<div class="form-group row">
			      <label for="inputname" class="col-sm-2 col-form-label">Name</label>
			      <div class="col-sm-6">
			        <input type="text" class="form-control" id="inputname" placeholder="Name">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
			      <div class="col-sm-6">
			        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
			      </div>
			    </div>
			    <div class="form-group row">
			      <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
			      <div class="col-sm-6">
			        <input type="password" class="form-control" id="inputPassword3" placeholder="Password" v-if="auto_password">
			      </div>
			    </div>
			    <div class="form-group row">
			      <div class="col-sm-2">Checkbox</div>
			      <div class="col-sm-10">
			        <div class="form-check">
			          <label class="form-check-label">
			            <input class="form-check-input" type="checkbox" name="auto_generate" checked="true" v-model="auto_password" > Auto Generate Password
			          </label>
			        </div>
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