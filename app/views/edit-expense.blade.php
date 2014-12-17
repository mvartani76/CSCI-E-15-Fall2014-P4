@extends('master')

@section('content')

<!-- Include common navigation bar -->
@include('common-navigation')

<div class="container">
	<div class="col-sm-6 col-md-4 col-md-offset-4">
		<h1 class="text-center">Edit Expense Item for <i class="text-info">Project {{ $project->id }}</i></h1>

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

				{{ Form::open(array('url' => '/edit-expense/'.$user->id.'/'.$project->id.'/'.$expense->id)) }}
					<!-- Needed to have the previous value selected in list. Could not get this to work -->
					<!-- using Laravel -->
					<?php foreach($expense['expense_types'] as $expense2): ?>
					<?php endforeach ?>

					<select class="form-control" autofocus="autofocus" name="expensetype">
						<?php
							foreach ($expensetype as $expensetype2):
								if ($expensetype2->id == $expense2->id)
								{
									echo '<option value="'.$expensetype2->id.'" selected>'.$expensetype2->expense_type_description.'</option>';
								}
								else
								{
									echo '<option value="'.$expensetype2->id.'" >'.$expensetype2->expense_type_description.'</option>';	
								}
						endforeach ?>
					</select>

					<!-- Only allow year values determined by start_year and end_year in the project definition -->
					<select class="form-control" placeholder=<?php echo '"'.$expense->year.'"' ?> autofocus="autofocus" name="year">
						<?php
							# set the default value to the previous value selected when revenue was added
							# this did not seem to work with the placeholder
							for ($i=$project->start_year;$i<=$project->end_year;$i++){
								if ($i==$expense->year)
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

					{{ Form::text('amount', Null, array('class' => 'form-control', 'placeholder' => $expense->amount, 'required', 'autofocus')) }}
					{{ Form::textarea('expense_description', Null, array('class' => 'form-control', 'placeholder' => $expense->expense_description, 'required', 'autofocus')) }}

					{{ Form::submit('Edit Expense', ['class' => 'btn btn-info btn-align-bottom btn-block ']) }}

				{{ Form::close() }}
				</br>
				<a href="/user-dashboard/{{ $user->id }}" class="btn btn-default btn-block">Return to User Dashboard</a>
				</br>
				<a href="/edit-project/{{ $user->id }}/{{ $project->id }}" class="btn btn-warning btn-block">Return to Edit Project</a>
			</div>
		</div>
	</div>
</div>
@stop