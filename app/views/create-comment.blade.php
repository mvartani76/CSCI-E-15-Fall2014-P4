<html>
	<body>
		@extends('master')

		@section('content')

		<div class="container">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="text-center">Create a New Comment</h1>

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
						{{ Form::open(array('url' => '/create-comment/'.$user->id)) }}

							{{ Form::select('project', array('' => 'Please Select Project') + Project::lists('project_name'), Null, array('class' => 'form-control', 'required', 'autofocus'),'default') }}
							{{ Form::select('intended_user', array('' => 'Please Select Intended User') + User::lists('username'), Null, array('class' => 'form-control', 'placeholder' => 'User', 'required', 'autofocus')) }}

							{{ Form::text('comment_title', Null, array('class' => 'form-control', 'placeholder' => 'Comment Title', 'required', 'autofocus')) }}
							{{ Form::textarea('comment_text', Null, array('class' => 'my-form-control', 'placeholder' => 'Comment Text', 'required', 'autofocus')) }}</br></br>
							{{ Form::submit('Create Comment', array('class'=>'btn btn-lg btn-primary btn-block')) }}

						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		@stop
	</body>
</html>