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
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>

@stop