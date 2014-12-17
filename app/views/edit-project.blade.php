		@extends('master')

		@section('title') Edit Project @stop

		@section('content')

	    <!-- Include common navigation bar -->
		@include('common-navigation')

		<div class="container-fluid">
			<h2>Edit Project 
			@if ( Session::has('flash_message') )            
				<div class= "alert error-alert text-danger  {{ Session::get('flash_type') }}">
					{{ Session::get('flash_message') }}
				</div>              
			@endif
			@foreach($errors->all() as $message)
				<div>{{ $message }}</div>
			@endforeach
			<a href="/user-dashboard/{{ $user->id }}" class="btn btn-default pull-right">Return to User Dashboard</a></h2>

			<div class = "col-lg-4">
				<div class = "well-password-big">
					<h2 class = "text-info">Project Parameters</h2>
					{{ Form::open(array('url' => '/edit-project/'.$user->id.'/'.$project->id)) }}

						{{ Form::label('project_name', 'Project Name') }}
						<!-- Tried to use the blade template form to populate fields with existing data but was not able to get exactly what I wanted -->
						<!-- Therefore I inlined the php inside the html -->
						<!--{{ Form::text('project_name', <?php echo $project->project_name?> }}</br></br>-->
						<input name="project_name" type="text" id="project_name" value = "<?php echo $project->project_name?>" class = "pull-right"></br></br>


						{{ Form::label('project_description', 'Project Description') }}
						<input name="project_description" type="text" id="project_description" value = "<?php echo $project->project_description?>" class = "pull-right"></br></br>

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
						<input name="tax_rate" type="text" id="tax_rate" value = "<?php $project->convert_to_percent($project->tax_rate) ?>" class = "pull-right"></br></br>

						{{ Form::label('discount_rate', 'Project Discount Rate') }}
						<input name="discount_rate" type="text" id="discount_rate" value = "<?php $project->convert_to_percent($project->discount_rate)?>" class = "pull-right"></br></br>

						{{ Form::label('terminal_growth_rate', 'Terminal Growth Rate') }}
						<input name="terminal_growth_rate" type="text" id="terminal_growth_rate" value = "<?php $project->convert_to_percent($project->terminal_growth_rate)?>" class = "pull-right"></br></br>

						{{ Form::label('terminal_rd', 'Terminal R&D Expense % of Sales') }}
						<input name="terminal_rd" type="text" id="terminal_rd" style="width: 75px" value = "<?php $project->convert_to_percent($project->terminal_rd)?>" class = "pull-right"></br></br>

						{{ Form::label('terminal_sga', 'Terminal SG&A Expense % of Sales') }}
						<input name="terminal_sga" type="text" id="terminal_sga" style="width: 75px" value = "<?php $project->convert_to_percent($project->terminal_sga)?>" class = "pull-right"></br></br>

						{{ Form::label('capex_percentage', 'Capex % of Sales') }}
						<input name="capex_percentage" type="text" id="capex_percentage" value = "<?php $project->convert_to_percent($project->capex_percentage)?>" class = "pull-right"></br></br>
						</br>
						{{ Form::submit('Update Project', ['class' => 'btn btn-info btn-align-bottom col-lg-12']) }}

					{{ Form::close() }}
				</div>
			</div>
			<div class = "col-lg-4">
				<div class = "well-password-big">
					<h2 class = "text-info">Project Revenues</h2>
					<div class = "DivWithScroll">
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <thead>
	                                <tr>
	                                    <th class="tablecell-size2-small-text">Revenue Type</th>
	                                    <th class="tablecell-size2-small-text">Revenue Description</th>
	                                    <th class="tablecell-size2-small-text">Amount</th>
	                                    <th class="tablecell-size2-small-text">Year</th>
	                                    <th class="tablecell-size2-small-text">Date/Time Last Modified</th>
	                                    <th class="tablecell-size2-small-text">Edit/Delete</th>
	                                </tr>
	                            </thead>
	                 
	                            <tbody>
	                                <!-- List the projects that the current user is assigned to -->
	                                @foreach($project['revenues'] as $revenue)
	                                <tr>
                                    <!-- Show the associated Revenue Type -->
                                    <!-- Do not understand why I need the foreach to access project_name but this is all that worked? -->
                                    <!-- It worked with multiple projects assigned to a given user so I am sticking with it for now -->
                                    <?php foreach($revenue['revenue_types'] as $revenue2): ?>
                                        <td class="tablecell-size2-small-text"><?php echo $revenue2->revenuetype; ?></td>
                                    <?php endforeach ?>
	                                    <td class="tablecell-size2-small-text">{{ $revenue->revenue_description }}</td>
										<td class="tablecell-size2-small-text">{{ $revenue->amount }}</td>
										<td class="tablecell-size2-small-text">{{ $revenue->year }}</td>
	                                    <td class="tablecell-size2-small-text">{{ $revenue->updated_at->format('F d, Y h:ia') }}</td>
	                                    <td>
	                                        <a href="/edit-revenue/{{ $user->id }}/{{ $project->id }}/{{ $revenue->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
	                                        <!-- Needed to suffix a /1 to the end to differentiate from the delete expense -->
	                                        {{ Form::open(['url' => '/edit-project/'.$user->id.'/'.$project->id.'/'.$revenue->id.'/1', 'method' => 'DELETE']) }}
	                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	                                        {{ Form::close() }}
	                                    </td>
	                                </tr>
	                                @endforeach
	                            </tbody>
	                        </table>
	                    </div>
					</div>
					</br>
					<a href="/add-revenue/{{ $user->id }}/{{ $project->id }}" class="btn btn-info btn-align-bottom col-lg-12" style="margin-right: 3px;">Add Revenue</a>
				</div>
			</div>
			<div class = "col-lg-4">
				<div class = "well-password-big">
					<h2 class = "text-info">Project Expenses</h2>
					<div class = "DivWithScroll">
	                    <div class="table-responsive">
	                        <table class="table table-bordered table-striped">
	                            <thead>
	                                <tr>
	                                    <th class="tablecell-size1">Expense Type</th>
	                                    <th class="tablecell-size6">Expense Description</th>
	                                    <th class="tablecell-size6">Amount</th>
	                                    <th class="tablecell-size6">Year</th>
	                                    <th class="tablecell-size5">Date/Time Last Modified</th>
	                                    <th>Edit/Delete</th>
	                                </tr>
	                            </thead>
	                 
	                            <tbody>
	                                <!-- List the projects that the current user is assigned to -->
	                                @foreach($project['expenses'] as $expense)
	                                <tr>
				                    <!-- Show the associated Expense Type -->
                                    <!-- Do not understand why I need the foreach to access project_name but this is all that worked? -->
                                    <!-- It worked with multiple projects assigned to a given user so I am sticking with it for now -->
                                    <?php foreach($expense['expense_types'] as $expense2): ?>
                                        <td class="tablecell-size3"><?php echo $expense2->expensetype; ?></td>
                                    <?php endforeach ?>
	                                    <td class="tablecell-size6">{{ $expense->expense_description }}</td>
										<td class="tablecell-size6">{{ $expense->amount }}</td>
										<td class="tablecell-size6">{{ $expense->year }}</td>
	                                    <td class="tablecell-size5">{{ $expense->updated_at->format('F d, Y h:ia') }}</td>
	                                    <td>
	                                        <a href="/edit-expense/{{ $user->id }}/{{ $project->id }}/{{ $expense->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
	                                        <!-- Needed to suffix a /2 to the end to differentiate from the delete revenue -->
	                                        {{ Form::open(['url' => '/edit-project/'.$user->id.'/'.$project->id.'/'.$expense->id.'/2', 'method' => 'DELETE']) }}
	                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	                                        {{ Form::close() }}
	                                    </td>
	                                </tr>
	                                @endforeach
	                            </tbody>
	                        </table>
	                    </div>
					</div>
				</br>
					<a href="/add-expense/{{ $user->id }}/{{ $project->id }}" class="btn btn-info btn-align-bottom col-lg-12" style="margin-right: 3px;">Add Expense</a>
				</div>
				</div>
			</div>
		</div>
		@stop