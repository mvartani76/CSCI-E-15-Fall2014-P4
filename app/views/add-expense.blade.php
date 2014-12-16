@extends('master')

@section('content')

<!-- Include common navigation bar -->
@include('common-navigation')

<div class="container">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<h1 class="text-center">Add a New Expense Item for <i class="text-info">Project {{ $project->id }}</i></h1>

		@if ( Session::has('flash_message') )			 
		<div class= "alert {{ Session::get('flash_type') }}">
			<h3>{{ Session::get('flash_message') }}</h3>
		</div>			  
		@endif

		@foreach($errors->all() as $message)
		<div>{{ $message }}</div>
		@endforeach
		<div class="account-wall">
			<div class="form-signin">

				{{ Form::open(array('url' => '/add-expense/'.$user->id.'/'.$project->id)) }}
					{{ Form::select('expensetype', array('' => 'Please Select Expense Type') + Expense_type::lists('expensetype'), Null, array('class' => 'form-control', 'required', 'autofocus'),'default') }}

					<!-- Only allow year values determined by start_year and end_year in the project definition -->
					<select class="form-control" placeholder="Year" autofocus="autofocus" name="year">
						<?php
							for ($i=$project->start_year;$i<=$project->end_year;$i++){
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
							echo '</select>'
						?>

					{{ Form::text('amount', Null, array('class' => 'form-control', 'placeholder' => 'Amount ($)', 'required', 'autofocus')) }}
					{{ Form::textarea('expense_description', Null, array('class' => 'form-control', 'placeholder' => 'Expense Description', 'required', 'autofocus')) }}

					{{ Form::submit('Add Expense', ['class' => 'btn btn-info btn-align-bottom btn-block ']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop