@extends('layouts.app')
	
@section('content')

	<h2>Edit a Job</h2>
	
		{{Form::open(['action' => ['JobsController@update', $Job->id], 'method' => 'POST'])}}
	
	<div class="form-group">
			{{Form::label('titele','Job Title')}}
			{{Form::text('title',$Job->title, ['class' => 'form-control', 'placeholder' => 'Job Title'])}}
		</div>

		<div class="form-group">
			{{Form::label('name','Company Name')}}
			{{Form::text('name',$Job->name, ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('category','Job Category')}}
			{{Form::text('category',$Job->category, ['class' => 'form-control', 'placeholder' => 'Job category'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('description','Job Description')}}
			{{Form::textArea('description',$Job->description, ['class' => 'form-control', 'placeholder' => 'Job Description'])}}
		</div>
		
		<div class="form-group">
			{{Form::label('budget','Job Budget')}}
			{{Form::number('budget',$Job->budget, ['class' => 'form-control', 'placeholder' => 'Budget - $', 'step' => 'any'])}}
		</div>
	
		{{Form::hidden('_method', 'PUT')}}
	{{Form::submit('Update Job', ['class' => 'btn btn-primary'])}}
	{{Form::close()}}
	<hr>
	
	{{Form::open(['action' => ['JobsController@destroy', $Job->id], 'method' => 'POST'])}}
	
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete Job', ['class' => 'btn btn-danger'])}}
	
	{{Form::close()}}

@endsection