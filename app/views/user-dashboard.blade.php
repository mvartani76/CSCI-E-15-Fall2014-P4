<html>
	<body>
		@extends('master')

		@section('title')
			Morris.js Bar Chart Example
		@stop

		@section('header')      
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    {{ HTML::style('css/font-awesome.min.css'); }}
    {{ HTML::style('css/sb-admin.css'); }}

		@stop

		@section('content')
		<h1>User Dashboard</h1>

                @if ( Session::has('flash_message') )            
                  <div class= "alert {{ Session::get('flash_type') }}">
                      <h3>{{ Session::get('flash_message') }}</h3>
                  </div>              
                @endif

    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">26</div>
                <div>New Comments!</div>
              </div>
            </div>
          </div>
          <a href="#">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">12</div>
                <div>New Tasks!</div>
              </div>
            </div>
          </div>
          <a href="#">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-shopping-cart fa-5x"></i>
              </div>
            <div class="col-xs-9 text-right">
              <div class="huge">124</div>
              <div>Projects</div>
            </div>
          </div>
        </div>
        <a href="#">
        <div class="panel-footer">
          <span class="pull-left">View Details</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-red">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-support fa-5x"></i>
            </div>
          <div class="col-xs-9 text-right">
            <div class="huge">13</div>
            <div>Support Tickets!</div>
          </div>
        </div>
      </div>
      <a href="#">
      <div class="panel-footer">
        <span class="pull-left">View Details</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
        <div class="clearfix"></div>
      </div>
      </a>
    </div>
  </div>
</div>
                <!-- /.row -->




<div class="graph-container">
				<div id="bar-example" style="height: 500px; width: 500px;"></div>
</div>


		
<script type="text/javascript" src="/js/jquery.js"></script>
 <script type="text/javascript" src="/js/bootstrap.js"></script>
 <script type="text/javascript" src="/js/plugins/morris/morris.min.js"></script>
 <script type="text/javascript" src="/js/plugins/morris/morris-data.js"></script>
 <script type="text/javascript" src="/js/plugins/morris/raphael.min.js"></script>
<script type="text/javascript">
new Morris.Bar({
  element: 'bar-example',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
@stop
	</body>

 
</html>