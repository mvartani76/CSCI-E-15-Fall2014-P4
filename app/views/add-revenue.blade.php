@extends('master')

@section('content')

<!-- Include common navigation bar -->
@include('common-navigation')

<div class="container">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<h1 class="text-center">Add a New Revenue Item for <i class="text-info">Project {{ $project->id }}</i></h1>

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

				{{ Form::open(array('url' => '/add-revenue/'.$user->id.'/'.$project->id)) }}
					{{ Form::select('revenuetype', array('' => 'Please Select Revenue Type') + Revenue_type::lists('revenuetype'), Null, array('class' => 'form-control', 'required', 'autofocus'),'default') }}

					<!-- Only allow year values determined by start_year and end_year in the project definition -->
					<select class="form-control" placeholder="Year" autofocus="autofocus" name="year">
						<?php
							for ($i=$project->start_year;$i<=$project->end_year;$i++){
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
							echo '</select>'
						?>

					{{ Form::text('amount', Null, array('class' => 'form-control', 'placeholder' => 'Amount ($)', 'required', 'autofocus')) }}
					{{ Form::textarea('revenue_description', Null, array('class' => 'form-control', 'placeholder' => 'Revenue Description', 'required', 'autofocus')) }}

					{{ Form::submit('Add Revenue', ['class' => 'btn btn-info btn-align-bottom btn-block ']) }}

				{{ Form::close() }}
				<a href="/user-dashboard/{{ $user->id }}" class="btn btn-default btn-block">Return to User Dashboard</a>
			</div>
		</div>
	</div>
</div>
@stop