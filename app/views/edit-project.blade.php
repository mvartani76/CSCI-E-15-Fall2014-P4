		@extends('master')

		@section('content')
		<h1>Edit Project</h1>

	    <!-- Include common navigation bar -->
		@include('common-navigation')

				@if ( Session::has('flash_message') )			 
				  <div class= "alert {{ Session::get('flash_type') }}">
				      <h3>{{ Session::get('flash_message') }}</h3>
				  </div>			  
				@endif

				@foreach($errors->all() as $message)
					<div>{{ $message }}</div>
				@endforeach

		{{ Form::open(array('url' => '/edit-project/'.$user->id.'/'.$project->id)) }}

			{{ Form::label('project_name', 'Project Name') }}
			<!-- Tried to use the blade template form to populate fields with existing data but was not able to get exactly what I wanted -->
			<!-- Therefore I inlined the php inside the html -->
			<!--{{ Form::text('project_name', <?php echo $project->project_name?> }}</br></br>-->
			<input name="project_name" type="text" id="project_name" value = "<?php echo $project->project_name?>"></br></br>


			{{ Form::label('project_description', 'Project Description') }}
			<input name="project_description" type="text" id="project_description" value = "<?php echo $project->project_description?>"></br></br>

			{{ Form::label('start_year', 'Start Year') }}
			<select name="start_year">
				<option value="<?php echo $project->start_year?>" selected><?php echo $project->start_year?></option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
			</select>

									
			{{ Form::label('end_year', 'End Year') }}
			<select name="end_year" placeholder="<?php echo $project->end_year?>">
				<option value="<?php echo $project->end_year?>" selected><?php echo $project->end_year?></option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
				<option value="2024">2024</option>
			</select> </br></br>


			{{ Form::label('tax_rate', 'Project Tax Rate') }}
			<input name="tax_rate" type="text" id="tax_rate" value = "<?php echo $project->tax_rate?>"></br></br>

			{{ Form::label('discount_rate', 'Project Discount Rate') }}
			<input name="discount_rate" type="text" id="discount_rate" value = "<?php $project->convert_to_percent($project->discount_rate)?>"></br></br>

			{{ Form::label('terminal_growth_rate', 'Terminal Growth Rate') }}
			<input name="terminal_growth_rate" type="text" id="terminal_growth_rate" value = "<?php $project->convert_to_percent($project->terminal_gr_rate)?>"></br></br>

			{{ Form::label('terminal_rd', 'Terminal R&D Expense % of Sales') }}
			<input name="terminal_rd" type="text" id="terminal_rd" value = "<?php $project->convert_to_percent($project->terminal_rd)?>"></br></br>

			{{ Form::label('terminal_sga', 'Terminal SG&A Expense % of Sales') }}
			<input name="terminal_sga" type="text" id="terminal_sga" value = "<?php $project->convert_to_percent($project->terminal_sga)?>"></br></br>

			{{ Form::label('capex_percentage', 'Capex % of Sales') }}
			<input name="capex_percentage" type="text" id="capex_percentage" value = "<?php $project->convert_to_percent($project->capex_percentage)?>"></br></br>

			{{ Form::submit() }}

		{{ Form::close() }}

		@stop