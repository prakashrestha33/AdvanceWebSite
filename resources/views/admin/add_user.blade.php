@extends('admin.layout')
@section('main_content')

    <h2>
        Add User
    </h2>

    <div>
    {!! Form::open(array('url'=>('home/register') ,'class' => 'form')) !!}

    <div class="form-group">
    	{!! Form::label('User Name') !!}
    	{!! Form::text('name',null,array('required',
    									'autofocus',
    									'class' =>'form-control',
    									'placehoder' =>'Name'
    									)) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('Email') !!}
    	{!! Form::text('email',null,array('required',
    									'class' =>'form-control',
    									'placehoder' =>'Email'
    									)) !!}
    </div>

    <div class="form-group">
    	{!! Form::label('Password') !!}
    	{!! Form::password('password',array('required',
    									'class' =>'form-control',
    									)) !!}

    <div class="form-group">
        {!! Form::label('Confirm Password') !!}
        {!! Form::password('password',array('required',
                                        'class' =>'form-control',
                                        )) !!}
    </div class="form-group">
    {!! Form::submit('submit',array('class' =>'btn btn-primary  col-md-offset-3')) !!}
	{{ Form::reset('Cancel', ['class' => 'btn btn-warning  col-md-offset-4 form-button']) }}
    <div>
    	
    </div>

    {!! Form::close() !!}

    </div>

    @endsection