<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Financial Valuation Made Easy</title>
			<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
			<link rel='stylesheet' href='/css/finwebapp.css' type='text/css'>
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