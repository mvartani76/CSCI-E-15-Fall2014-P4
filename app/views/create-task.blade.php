<html>
	<body>
		@extends('master')

		@section('content')

		<div class="container">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="text-center">Create a New Task</h1>

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
						{{ Form::open(array('url' => '/create-task/'.$user->id)) }}

							{{ Form::text('task_title', Null, array('class' => 'form-control', 'placeholder' => 'Task Title', 'required', 'autofocus')) }}
							{{ Form::textarea('task_text', Null, array('class' => 'my-form-control', 'placeholder' => 'Task Text', 'required', 'autofocus')) }}</br></br>
							{{ Form::submit('Create Task', array('class'=>'btn btn-lg btn-primary btn-block')) }}

						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		@stop
	</body>
</html>