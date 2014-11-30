<!DOCTYPE html>
<html lang="en">
	
		<title>@yield('title')</title>
		<meta charset="UTF-8">
		{{ HTML::style('/css/bootstrap.min.css'); }}
		{{ HTML::style('/css/finwebapp.css'); }}
		{{ HTML::style('/css/font-awesome.min.css'); }}
		{{ HTML::style('/css/sb-admin.css'); }}
		@yield('header')

		<body>
				@if(Session::has('message'))
					<div class="alert alert-success">
						{{Session::get('message')}}
					</div>
				@endif
				@yield('content')
				<div class="page-footer">
					@yield('footer')
				</div>
				@yield('misc')
		</body>
</html>