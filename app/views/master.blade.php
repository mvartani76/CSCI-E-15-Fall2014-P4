<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Financial Valuation Made Easy</title>
	</head>
	<body>
		<div class="container">
			<div class="page-header">
				@yield('header')
			</div>
			@if(Session::has('message'))
				<div class="alert alert-success">
					{{Session::get('message')}}
				</div>
			@endif
			@yield('content')
			<div class="page-footer">
				@yield('footer')
			</div>
		</div>
			@yield('misc')
	</body>
</html>