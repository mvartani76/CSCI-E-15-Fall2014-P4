		@extends('master')

		@section('title')
			User Dashboard
		@stop

		@section('content')

    <!-- set the authenticated $user to use
    common names in the navigation bar below -->
    <?php $user = Auth::user(); ?>

    <!-- Include common navigation bar -->
    @include('common-navigation')

		<h1>User Dashboard - <i class = "text-info">{{ (Auth::user()->username) }}</i></h1> 
                @if ( Session::has('flash_message') )            
                  <div class= "alert {{ Session::get('flash_type') }}">
                      <h3>{{ Session::get('flash_message') }}</h3>
                  </div>              
                @endif

    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-comments fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">{{ (Auth::user()->countcomments()) }}</div>
                <div>Comments</div>
              </div>
            </div>
          </div>
          <a href="/user-comment/{{ (Auth::user()->id) }}">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-green">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-tasks fa-5x"></i>
              </div>
              <div class="col-xs-9 text-right">
                <div class="huge">{{ (Auth::user()->counttasks()) }}</div>
                <div>Tasks</div>
              </div>
            </div>
          </div>
          <a href="/user-task/{{ (Auth::user()->id) }}">
          <div class="panel-footer">
            <span class="pull-left">View Details</span>
            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
            <div class="clearfix"></div>
          </div>
          </a>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="panel panel-yellow">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-3">
                <i class="fa fa-folder-open fa-5x"></i>
              </div>
            <div class="col-xs-9 text-right">
              <div class="huge">{{ (Auth::user()->countprojects()) }}</div>
              <div>Projects</div>
            </div>
          </div>
        </div>
        <a href="/user-project/{{ (Auth::user()->id) }}">
        <div class="panel-footer">
          <span class="pull-left">View Details</span>
          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
          <div class="clearfix"></div>
        </div>
        </a>
      </div>
    </div>
  </div>
</div>
                <!-- /.row -->
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/bootstrap.js"></script>

@stop