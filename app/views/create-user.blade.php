<html>
	<body>
		@extends('master')

		@section('content')
		<h1>Create a New User</h1>

		{{ Form::open(array('url' => '/create-user')) }}

			{{ Form::label('first_name', 'First Name') }}
			{{ Form::text('first_name') }}</br></br>

			{{ Form::label('last_name', 'Last Name') }}
			{{ Form::text('last_name') }}</br></br>
			
			{{ Form::label('company_name', 'Company Name') }}
			{{ Form::text('company_name') }}</br></br>

			{{ Form::label('user_name', 'User Name') }}
			{{ Form::text('user_name') }}</br></br>

			{{ Form::label('address_1', 'Address 1') }}
			{{ Form::text('address_1') }}</br></br>

			{{ Form::label('address_2', 'Address 2') }}
			{{ Form::text('address_2') }}</br></br>

			{{ Form::label('city', 'City') }}
			{{ Form::text('city') }}</br></br>

			{{ Form::label('state', 'State') }}
			{{ Form::text('state') }}</br></br>

			{{ Form::label('zip_code', 'Zip Code') }}
			{{ Form::text('zip_code') }}</br></br>

			{{ Form::label('country', 'Country') }}
			{{ Form::text('country') }}</br></br>

			{{ Form::label('email', 'Email Address') }}
			{{ Form::email('email') }}</br></br>

			{{ Form::label('mobile_phone', 'Mobile Number') }}
			{{ Form::text('mobile_phone') }}</br></br>

			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}</br></br>

			{{ Form::submit() }}

		{{ Form::close() }}

		@stop
	</body>
</html>