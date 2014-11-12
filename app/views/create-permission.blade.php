<html>
	<body>
		@extends('master')

		@section('content')
		<h1>Create a New Permission</h1>

		{{ Form::open(array('url' => '/create-permission')) }}

			{{ Form::label('permission_level', 'Permission Level') }}
			{{ Form::text('permission_level') }}</br></br>

			{{ Form::label('p_view', 'View') }}
			{{ Form::radio('p_view', '1') }} True
			{{ Form::radio('p_view', '0') }} False</br></br>

			{{ Form::label('p_add', 'Add') }}
			{{ Form::radio('p_add', '1') }} True
			{{ Form::radio('p_add', '0') }} False</br></br>

			{{ Form::label('p_update', 'Update') }}
			{{ Form::radio('p_update', '1') }} True
			{{ Form::radio('p_update', '0') }} False</br></br>

			{{ Form::label('p_delete', 'Delete') }}
			{{ Form::radio('p_delete', '1') }} True
			{{ Form::radio('p_delete', '0') }} False</br></br>

			{{ Form::label('p_approve', 'Approve') }}
			{{ Form::radio('p_approve', '1') }} True
			{{ Form::radio('p_approve', '0') }} False</br></br>

			{{ Form::label('p_customize', 'Customize') }}
			{{ Form::radio('p_customize', '1') }} True
			{{ Form::radio('p_customize', '0') }} False</br></br>

			{{ Form::submit() }}

		{{ Form::close() }}

		@stop
	</body>
</html>