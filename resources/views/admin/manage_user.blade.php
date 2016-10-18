@extends('admin.layout')
@section('main_content')

<h2>Users</h2>

<div class="col-md-12">
	<table id="edit_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
	<tr>
	<th>Username</th>
	<th>Email</th>
	<th>Created at</th>
	<th>Updated at</th>
	<th>Action</th>
	</tr>
	</thead>
	<tfoot>
	<tr>
	<th>Username</th>
	<th>Email</th>
	<th>Created at</th>
	<th>Updated at</th>
	<th>Action</th>
	</tr>
	</tfoot>
	

	<tbody>
	@foreach ($data as $user)
		
	 <tr>
	   <td >{{ $user->name }}</td>
	 
	  <td >{{$user->email}}</td>
	   
	   <td >{{$user->created_at}}</td>
	   <td >{{$user->updated_at}}</td>
	   <td>
	   <a href="{{url('home/edit_user',$user->id) }}" name="Edit user" class="btn btn-primary"> Edit</a>
	   <a href="{{url('home/delete_user',$user->id) }}" class="btn btn-warning col-md-offset-3" onclick="return confirm('Are you sure you want to delete this item?');"> Delete</a>
	   </td>
	  </tr>
	  @endforeach
	</tbody>
	

	</table>
</div>

@endsection