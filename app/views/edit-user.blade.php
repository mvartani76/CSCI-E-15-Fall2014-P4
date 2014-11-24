<html>
	<body>
		@extends('master')

		@section('content')

		<div class="container">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<h1 class="text-center">Edit User</h1>

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
						{{ Form::open(array('url' => '/edit-user')) }}


							{{ Form::text('first_name', Null, array('class' => 'form-control', 'placeholder' => $user->first_name, 'required', 'autofocus')) }}
							{{ Form::text('last_name', Null, array('class' => 'form-control', 'placeholder' => $user->last_name, 'required', 'autofocus')) }}
							{{ Form::text('company_name', Null, array('class' => 'form-control', 'placeholder' => $user->company_name, 'autofocus')) }}
							{{ Form::text('username', Null, array('class' => 'form-control', 'placeholder' => $user->username, 'required', 'autofocus')) }}

							{{ Form::text('address_1', Null, array('class' => 'form-control', 'placeholder' => $user->Address_1, 'autofocus')) }}
							{{ Form::text('address_2', Null, array('class' => 'form-control', 'placeholder' => $user->Address_2, 'autofocus')) }}

							{{ Form::text('city', Null, array('class' => 'form-control', 'placeholder' => $user->city, 'autofocus')) }}

							{{ Form::select('state', array(	'Alabama' => 'Alabama', 'Alaska' => 'Alaska',
															'Arizona' => 'Arizona', 'Arkansas' => 'Arkansas',
															'California' => 'California', 'Colorado' => 'Colorado',
															'Connecticut' => 'Connecticut', 'Delaware' => 'Delaware',
															'Florida' => 'Florida', 'Georgia' => 'Georgia',
															'Hawaii' => 'Hawaii', 'Idaho' => 'Idaho',
															'Illinois' => 'Illinois', 'Indiana' => 'Indiana',
															'Iowa' => 'Iowa', 'Kansa' => 'Kansas',
															'Kentucky' => 'Kentucky', 'Louisiana' => 'Louisiana',
															'Maine' => 'Maine', 'Maryland' => 'Maryland',
															'Massachusetts' => 'Massachusetts', 'Michigan' => 'Michigan',
															'Minnesota' => 'Minnesota', 'Mississippi' => 'Mississippi',
															'Missouri' => 'Missouri', 'Montana' => 'Montana',
															'Nebraska' => 'Nebraska', 'Nevada' => 'Nevada',
															'New Hampshire' => 'New Hampshire', 'New Jersey' => 'New Jersey',
															'New Mexico' => 'New Mexico', 'New York' => 'New York',
															'North Carolina' => 'North Carolina', 'North Dakota' => 'North Dakota',
															'Ohio' => 'Ohio', 'Oklahoma' => 'Oklahoma',
															'Oregon' => 'Oregon', 'Pennsylvania' => 'Pennsylvania',
															'Rhode Island' => 'Rhode Island', 'South Carolina' => 'South Carolina',
															'South Dakota' => 'South Dakota', 'Tennessee' => 'Tennessee',
															'Texas' => 'Texas', 'Utah' => 'Utah',
															'Vermont' => 'Vermont', 'Virginia' => 'Virginia',
															'Washington' => 'Washington', 'West Virginia' => 'West Virginia',
															'Wisconsin' => 'Wisconsin', 'Wyoming' => 'Wyoming'),
															$user->state, array('class' => 'form-control', 'autofocus')) }}

							{{ Form::text('zip_code', Null, array('class' => 'form-control', 'placeholder' => $user->zip_code, 'autofocus')) }}

							{{ Form::select('country', array(	'Canada' => 'Canada', 'China' => 'China',
																'France' => 'France', 'Germany' => 'Germany',
																'United Kingdom' => 'United Kingdom', 'United States' => 'United States'),
																$user->country, array('class' => 'form-control')) }}
							

							{{ Form::text('email', Null, array('class' => 'form-control', 'placeholder' => $user->email, 'required', 'autofocus')) }}
							{{ Form::text('mobile_phone', Null, array('class' => 'form-control', 'placeholder' => $user->mobile_phone, 'required', 'autofocus')) }}
							{{ Form::text('password', Null, array('class' => 'form-control', 'placeholder' => $user->password, 'required', 'autofocus')) }}

							{{ Form::submit('Edit User', array('class'=>'btn btn-lg btn-primary btn-block')) }}

						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
		@stop
	</body>
</html>