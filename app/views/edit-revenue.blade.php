@extends('master')

@section('content')

<!-- Include common navigation bar -->
@include('common-navigation')

<div class="container">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<h1 class="text-center">Edit Revenue Item for <i class="text-info">Project {{ $project->id }}</i></h1>

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

				{{ Form::open(array('url' => '/edit-revenue/'.$user->id.'/'.$project->id.'/'.$revenue->id)) }}
					<!-- Needed to have the previous value selected in list. Could not get this to work -->
					<!-- using Laravel -->
					<?php foreach($revenue['revenue_types'] as $revenue2): ?>
					<?php endforeach ?>

					<select class="form-control" autofocus="autofocus" name="revenuetype">
						<?php
							foreach ($revenuetype as $revenuetype2):
								if ($revenuetype2->id == $revenue2->id)
								{
									echo '<option value="'.$revenuetype2->id.'" selected>'.$revenuetype2->revenue_type_description.'</option>';
								}
								else
								{
									echo '<option value="'.$revenuetype2->id.'" >'.$revenuetype2->revenue_type_description.'</option>';	
								}
						endforeach ?>
					</select>

					<!-- Only allow year values determined by start_year and end_year in the project definition -->
					<select class="form-control" placeholder=<?php echo '"'.$revenue->year.'"' ?> autofocus="autofocus" name="year">
						<?php
							# set the default value to the previous value selected when revenue was added
							# this did not seem to work with the placeholder
							for ($i=$project->start_year;$i<=$project->end_year;$i++){
								if ($i==$revenue->year)
								{
									echo '<option value="'.$i.'" selected>'.$i.'</option>';
								}
								else
								{
									echo '<option value="'.$i.'">'.$i.'</option>';
								}
							}
							echo '</select>'
						?>

					{{ Form::text('amount', Null, array('class' => 'form-control', 'placeholder' => $revenue->amount, 'required', 'autofocus')) }}
					{{ Form::textarea('revenue_description', Null, array('class' => 'form-control', 'placeholder' => $revenue->revenue_description, 'required', 'autofocus')) }}

					{{ Form::submit('Edit Revenue', ['class' => 'btn btn-info btn-align-bottom btn-block ']) }}

				{{ Form::close() }}
				</br></br>
				<a href="/user-dashboard/{{ $user->id }}" class="btn btn-default btn-block">Return to User Dashboard</a>
				</br>
				<a href="/edit-project/{{ $user->id }}/{{ $project->id }}" class="btn btn-warning btn-block">Return to Edit Project</a>
			</div>
		</div>
	</div>
</div>
@stop