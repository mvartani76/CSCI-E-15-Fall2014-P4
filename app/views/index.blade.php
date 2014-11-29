@extends('master')

@section('title')
	Welcome to the Financial Valuation Web App
@stop

@section('head')

@stop

@section('content')

	<div class="container">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
			<h1 class="text-center">Financial Valuation Web App Sign-In</h1>
            <div class="account-wall">
				<div class="form-signin">
                {{ Form::open(array('url' => '/', 'method' => 'POST')) }}   
					{{ Form::email('email', Null, array('class' => 'form-control', 'placeholder' => 'Email', 'required', 'autofocus')) }}

					{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required'))}}
					{{ Form::submit('Sign In', array('class'=>'btn btn-lg btn-primary btn-block'))}}
                {{ Form::close() }}
				</div>
				<!-- Tried using laravel here but could not get the generated html to match -->
                <label class="checkbox pull-left">
                    <input type="hidden" name= "remember_me" value = "false">
                    <input type="checkbox" name = "remember_me" value= "true">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
            </div>
            {{ link_to('/create-user', 'Create a New Account', array("class"=>"text-center new-account btn btn-warning")) }}
        </div>
    </div>

@stop