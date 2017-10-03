@extends('layouts.manage')

@section('content')
    <div class="container-fluid">
        <div class="side-body">
           <h1> Manage Users </h1>
           
           	<a class="btn btn-success" href=" {{'users/create'}} ">Create User: &nbsp; <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
          
           <br>
           <table class="table">
			  <thead class="thead-default">
			    <tr>
			      <th>Id</th>
			      <th>Name</th>
			      <th>Email</th>
			      <th>Date Created</th>
			      <th>Actions</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach ($users as $user)
			    <tr>
			      <th scope="row"> {{$user->id}} </th>
			      <td> {{$user->name}} </td>
			      <td> {{$user->email}} </td>
			      <td> {{$user->created_at->toFormattedDateString()}} </td>
			      <td>
			      	<a href="{{'users/edit/'.$user->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</a>
					<a href=" {{'users/show/'.$user->id}} "><i class="fa fa-eye" aria-hidden="true"></i>
					</a>
				</td>
			    </tr>
			    @endforeach
			  </tbody>
			</table>
			{{$users->links()}}
        </div>
    </div>
@endsection