@extends('admin.layout')
@section('main_content')

<h2>Edit Profile</h2>

<div class='container'>

<form class="form-horizontal" role="form" method="POST" action="">
    {{ csrf_field() }}
        <div class="form-group">
        	<label>Name</label>
        	<input id="name" type="text" class="form-control" name="name" placeholder="{{ $data->name }}" required autofocus>
        </div>

</form>
</div>



@endsection