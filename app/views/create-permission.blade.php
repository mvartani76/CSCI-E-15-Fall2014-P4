<html>
	<body>
		@extends('master')

		@section('content')
		<h1>Create a New Permission</h1>

		{{ Form::open(array('url' => '/create-permission')) }}

			{{ Form::label('permission_level', 'Permission Level') }}
			{{ Form::text('permission_level') }}</br></br>

			{{ Form::label('view', 'View') }}
			{{ Form::radio('view', '1') }} True
			{{ Form::radio('view', '0') }} False</br></br>

			{{ Form::label('add', 'Add') }}
			{{ Form::radio('add', '1') }} True
			{{ Form::radio('add', '0') }} False</br></br>

			{{ Form::label('update', 'Update') }}
			{{ Form::radio('update', '1') }} True
			{{ Form::radio('update', '0') }} False</br></br>

			{{ Form::label('delete', 'Delete') }}
			{{ Form::radio('delete', '1') }} True
			{{ Form::radio('delete', '0') }} False</br></br>

			{{ Form::label('approve', 'Approve') }}
			{{ Form::radio('approve', '1') }} True
			{{ Form::radio('approve', '0') }} False</br></br>

			{{ Form::label('customize', 'Customize') }}
			{{ Form::radio('customize', '1') }} True
			{{ Form::radio('customize', '0') }} False</br></br>

			{{ Form::submit() }}

		{{ Form::close() }}

		@stop
	</body>
</html>