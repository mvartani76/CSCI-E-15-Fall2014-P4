<html>
	<body>
		@extends('master')

		@section('content')
 
@section('title') Projects @stop
 
@section('content')
 
<div class="col-lg-10 col-lg-offset-1">
 
    <h1><i class="fa fa-users"></i> User Projects <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>
 
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Project Description</th>
                    <th>Date/Time Created</th>
                    <th>Date/Time Last Modified</th>
                    <th></th>
                </tr>
            </thead>
 
            <tbody>
                @foreach($user['projects'] as $project)
                <tr>
                    <td>{{ $project->project_name }}</td>
                    <td>{{ $project->project_description }}</td>
                    <td>{{ $project->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{ $user->updated_at->format('F d, Y h:ia') }}</td>
                    <td>
                        <a href="/edit-project/{{ $project->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                        {{ Form::open(['url' => '/project/' . $project->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
    <a href="/user/create" class="btn btn-success">Add User</a>
 
</div>
 
		@stop
	</body>
</html>