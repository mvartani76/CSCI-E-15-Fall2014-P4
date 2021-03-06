@extends('master')

@section('content')

<!-- Include common navigation bar -->
@include('common-navigation')
<div class= "col-lg-4 col-md-offset-4">
		<h1 class="text-center">Create a New Project</h1>

		@if ( Session::has('flash_message') )			 
			<div class= "alert {{ Session::get('flash_type') }}">
				<h3>{{ Session::get('flash_message') }}</h3>
			</div>			  
		@endif

		@foreach($errors->all() as $message)
			<div>{{ $message }}</div>
		@endforeach
		<div class="well">	

				{{ Form::open(array('url' => '/create-project/{id}')) }}

					{{ Form::label('project_name', 'Project Name') }}
					{{ Form::text('project_name', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('project_description', 'Project Description') }}
					{{ Form::text('project_description', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('start_year', 'Start Year') }}
					{{ Form::select('start_year', array(
						'2014' => '2014',
						'2015' => '2015',
						'2016' => '2016',
						'2017' => '2017',
						'2018' => '2018',
						'2019' => '2019',
						'2020' => '2020',
						'2021' => '2021',
						'2022' => '2023',
						'2023' => '2023',
						'2024' => '2024'), Null, array('class' => 'form-control', 'autofocus')) }}</br>
											
					{{ Form::label('end_year', 'End Year') }}
					{{ Form::select('end_year', array(
						'2014' => '2014',
						'2015' => '2015',
						'2016' => '2016',
						'2017' => '2017',
						'2018' => '2018',
						'2019' => '2019',
						'2020' => '2020',
						'2021' => '2021',
						'2022' => '2023',
						'2023' => '2023',
						'2024' => '2024'), Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('tax_rate', 'Project Tax Rate') }}
					{{ Form::text('tax_rate', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('discount_rate', 'Project Discount Rate') }}
					{{ Form::text('discount_rate', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('terminal_growth_rate', 'Terminal Growth Rate') }}
					{{ Form::text('terminal_growth_rate', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('terminal_rd', 'Terminal R&D Expense % of Sales') }}
					{{ Form::text('terminal_rd', Null, array('class' => 'form-control', 'autofocus')) }}</br>			

					{{ Form::label('terminal_sga', 'Terminal SG&A Expense % of Sales') }}
					{{ Form::text('terminal_sga', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::label('capex_percentage', 'Capex % of Sales') }}
					{{ Form::text('capex_percentage', Null, array('class' => 'form-control', 'autofocus')) }}</br>

					{{ Form::submit('Create Project', array('class'=>'btn btn-lg btn-primary btn-block')) }}

				{{ Form::close() }}
			</div>
</div>
@stop