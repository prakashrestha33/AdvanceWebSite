@extends('admin.layout')
@section('main_content')









<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  		<h2>
         Add Product
       </h2>
      <div class="panel-body">
        <div class="" id=" ">
    

    <div class="col-md-8">




    {!! Form::open(array('route'=>'product.store' ,'class' => 'form')) !!}


 <div class="form-group">
    	{!! Form::label('Category Name') !!}


        <select class="form-control">
            @foreach ($cat as $catname)
            <option value=" {{$catname->name}}">
                {{$catname->name}}
            </option>
            @endforeach
        </select>

    	{{--{!! Form::select('category',[--}}
    	                             {{--'{{$catname->name}}'],null, ['class'=>"form-control"]) !!}--}}

    </div>
    <div class="form-group">
    	{!! Form::label('Product Name') !!}
    	{!! Form::text('name',null,array('required',
    									'autofocus',
    									'class' =>'form-control ',
    									'placeholder' =>'Product name'
    									)) !!}
    </div>
 <div class="form-group">
    	{!! Form::label('Product code') !!}
    	{!! Form::text('name',null,array('required',
    									'autofocus',
    									'class' =>'form-control',
    									'placeholder' =>'Product code'
    									)) !!}
    </div>
    <div class="form-group">
    	{!! Form::label('Description') !!}
    	{!! Form::textarea('description',null,array('required',
    									'class' =>'form-control',
    									'placeholder' =>'description'
    									)) !!}
    </div>
 <div class="form-group">
    	{!! Form::label('Product price') !!}
    	{!! Form::text('name',null,array('required',
    									'autofocus',
    									'class' =>'form-control',
    									'placeholer' =>'Product price'
    									)) !!}
    </div>
     <div class="form-group">
    	{!! Form::label('Product image') !!}
    	{!! Form::file('name',null,array('required',
    									'autofocus',
    									'class' =>'form-control ',
    									'placeholder' =>'Product image'
    									)) !!}
    </div>
    
  
    {!! Form::submit('submit',array('class' =>'btn btn-primary  col-md-offset-3')) !!}
	{{ Form::reset('Cancel', ['class' => 'btn btn-danger  col-md-offset-4 form-button']) }}
    <div>
    	
    </div>

    {!! Form::close() !!}

    </div>
    </div>

    @endsection
      </div>
    </div>
 



