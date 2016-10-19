@extends('admin.layout')
@section('main_content')

<div class="col-md-6">

@foreach ($cat as $catdata)

<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#{{$catdata->id}}">
       {{$catdata->name}}</a>
      </h4>
    </div>
    <div id="{{$catdata->id}}" class="panel-collapse collapse ">
      <div class="panel-body">{{$catdata->description}}</div>
    <div>
     <button class="btn btn-success">edit</button>
     <button class="btn btn-danger">delete</button>
     </div>
    
     </div>


  </div>





  </div>
   @endforeach









<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  
  		<h2>
         Add Category
       </h2>
      <div class="panel-body">
        <div class="" id=" ">
    

    <div>
    {!! Form::open(array('route'=>'category.store' ,'class' => 'form')) !!}
    
  
        {{ Form::label('name','name:')}}
        {{ Form::text('name',null,array('class'=>'form-control'))}}
        {{ Form::label('description','Description:')}}
        {{ Form::textarea ('description',null,array('class'=>'form-control'))}}
        
         
        	{{Form::submit('save', array('class'=>'btn btn-success btn-lg btn-block', 'style'=>'margin-top:20px;'))}}

	{{ Form::reset('Cancel', ['class' => 'btn btn-danger  btn-lg btn-block form-button']) }} 
        	{!! Form::close() !!}

    </div>
    </div>

    
 
</div>
    </div>

    </div>
    
    {{-- <div class="col-md-offset 6 ">

    <table class=" table table-striped ">
    <th> sn</th>
    <th> task</th>
    <th> date</th>
    <tbody>
    <tr>
   		<td>1</td>
    	<td>visit base</td>
    	<td>2014/5/14</td>
    </tr>
    <tr>
   		<td>1</td>
    	<td>visit base</td>
    	<td>2014/5/14</td>
    </tr>
    <tr>
   		<td>1</td>
    	<td>visit base</td>
    	<td>2014/5/14</td>
    </tr>
    <tr>
   		<td>1</td>
    	<td>visit base</td>
    	<td>2014/5/14</td>
    </tr>
    	


    </tbody>
    </table>
    </div> --}}
    @endsection
      





