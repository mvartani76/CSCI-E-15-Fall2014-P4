@extends('master')

@section('title') View Project @stop

@section('content')

<!-- Include common navigation bar -->
@include('common-navigation')

<div class="container-fluid">
	<h2>View <i class="text-info">Project {{ $project->id }}</i>
	@if ( Session::has('flash_message') )            
		<div class= "alert error-alert text-danger  {{ Session::get('flash_type') }}">
			{{ Session::get('flash_message') }}
		</div>              
	@endif
	@foreach($errors->all() as $message)
		<div>{{ $message }}</div>
	@endforeach
	
	<a href="/user-dashboard/{{ $user->id }}" class="btn btn-default pull-right">Return to User Dashboard</a>
	<a href="/user-project/{{ $user->id }}" class="btn btn-warning pull-right">Return to User Projects</a></h2>

	<div class = "col-lg-6">
		<div class="well">
			<div class="table-responsive">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th></th>
						<?php
							for ($i=$project->start_year;$i<=$project->end_year;$i++)
							{
								echo '<th>'.$i.'</th>';
							}
						?>
						</tr>
					</thead>
					
					<tbody>
						<tr>
							<td>Revenues</td>
							<?php
							$eyear = $project->end_year - $project->start_year;
							for ($i=0;$i<=$eyear;$i++)
							{
								$rev_sum_amount[$i] = Project::find($project->id)->revenues()->where('Year',$i+$project->start_year)->sum('amount');
								
								echo '<td>'.round($rev_sum_amount[$i],0).'</td>';
							}
							?>
						<tr>
							<td>Expenses</td>
							<?php
							for ($i=0;$i<=$eyear;$i++)
							{
								$exp_sum_amount[$i] = Project::find($project->id)->expenses()->where('Year',$i+$project->start_year)->sum('amount');
								echo '<td>'.round($exp_sum_amount[$i],0).'</td>';
							}
							?>
						</tr>
						<tr>
							<td>Profit</td>
							<?php
							for ($i=0;$i<=$eyear;$i++)
							{
								$profit[$i] = $rev_sum_amount[$i] - $exp_sum_amount[$i];
								echo '<td>'.round($profit[$i],0).'</td>';
							}
							?>
						</tr>
						<tr>
							<td>Taxes</td>
							<?php
							for ($i=0;$i<=$eyear;$i++)
							{
								if ($profit[$i]<0)
								{
									$taxes[$i] = 0;
								}
								else
								{
									$taxes[$i] = $profit[$i] * ($project->tax_rate/100);
								}
								echo '<td>'.round($taxes[$i],0).'</td>';
							}
							?>
						</tr>
						<tr>
							<td>NOPAT</td>
							<?php
							for ($i=0;$i<=$eyear;$i++)
							{
								$nopat[$i] = $profit[$i] - $taxes[$i];
								echo '<td>'.round($nopat[$i],0).'</td>';
							}
							?>
						</tr>
						<tr>
							<td>Discounted Cash Flow</td>
							<?php
							for ($i=0;$i<=$eyear;$i++)
							{
								$dcf[$i] = $nopat[$i]*pow((1+$project->discount_rate/100),(-($i)));
								echo '<td>'.round($dcf[$i],0).'</td>';
							}
							?>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div class = "well">
			<h2 class = "text-info">Present Value = $
				<?php
				$pv = 0;
				for ($i=0;$i<=$eyear;$i++)
				{
					$pv = $pv + $dcf[$i];
				}
				echo round($pv,0);
				?>
			</h2>
			<h2 class = "text-success">Terminal Value = $
				<?php
					$tv = $dcf[$eyear]*(1+$project->terminal_growth_rate)/($project->discount_rate-$project->terminal_growth_rate);
					echo round($tv,0);
				?>
			</h2>
			<h2 class = "text-danger">Total Valuation = $
				<?php
					echo round($pv+$tv,0);
				?>
			</h2>
		</div>
		<div class = "well">
			<div class="graph-container">
				<h2 class="text-danger text-center">NOPAT ($)</h2>
				<div id="nopatchart" style="height: 400px; width: 600px;"></div>
			</div>
			<br></br>
		</div>
	</div>
	<div class = "col-lg-6">
		<div class = "well">
			<div class="graph-container">
				<h2 class="text-danger text-center">Revenues ($)</h2>
				<div id="revenuechart" style="height: 400px; width: 600px;"></div>
			</div>
			<br></br>
		</div>
		<div class = "well">
			<div class="graph-container">
				<h2 class="text-danger text-center">Expenses ($)</h2>
				<div id="expensechart" style="height: 400px; width: 600px;"></div>
			</div>
			<br></br>
		</div>
	</div>
</div>

<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="/js/plugins/morris/morris-data.js"></script>
<script type="text/javascript" src="/js/plugins/morris/raphael.min.js"></script>
<script type="text/javascript">
new Morris.Bar({
  element: 'revenuechart',
  data: [
<?php
	for ($i=0;$i<=$eyear-1;$i++)
	{
		echo '{ y: '.($i+$project->start_year).', a: '.$rev_sum_amount[$i].' },';
	}
	echo '{ y: '.$project->end_year.', a: '.$rev_sum_amount[$eyear].' }'; 
?>
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Revenues']
});
</script>

<script type="text/javascript">
new Morris.Bar({
  element: 'expensechart',
  data: [
<?php
	for ($i=0;$i<=$eyear-1;$i++)
	{
		echo '{ y: '.($i+$project->start_year).', a: '.$exp_sum_amount[$i].' },';
	}
	echo '{ y: '.$project->end_year.', a: '.$exp_sum_amount[$eyear].' }'; 
?>
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['Expenses']
});
</script>

<script type="text/javascript">
new Morris.Bar({
  element: 'nopatchart',
  data: [
<?php
	for ($i=0;$i<=$eyear-1;$i++)
	{
		echo '{ y: '.($i+$project->start_year).', a: '.$nopat[$i].' },';
	}
	echo '{ y: '.$project->end_year.', a: '.$nopat[$eyear].' }'; 
?>
  ],
  xkey: 'y',
  ykeys: ['a'],
  labels: ['NOPAT']
});
</script>
