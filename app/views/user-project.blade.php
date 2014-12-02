
		@extends('master')
        
        @section('title') Projects @stop

        @section('header')
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
        @stop

        @section('content')

        <!-- set the authenticated $user to use
        common names in the navigation bar below -->
        <?php $user = Auth::user(); ?>

        @include('common-navigation')
                      
                <div class="container-fluid">
                 
                    <h1><i class="fa fa-users"></i> {{ $user->username }} User Projects <a href="/logout" class="btn btn-default pull-right">Logout</a></h1>
                 
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
                                <!-- List the projects that the current user is assigned to -->
                                @foreach($user['projects'] as $project)
                                <tr>
                                    <td>{{ $project->project_name }}</td>
                                    <td>{{ $project->project_description }}</td>
                                    <td>{{ $project->created_at->format('F d, Y h:ia') }}</td>
                                    <td>{{ $user->updated_at->format('F d, Y h:ia') }}</td>
                                    <td>
                                        <a href="/edit-project/{{ $user->id }}/{{ $project->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                                        {{ Form::open(['url' => '/project/' . $project->id, 'method' => 'DELETE']) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                 
                    <a href="/create-project/{{ $user->id }}" class="btn btn-success">New Project</a>
                 
                </div>
                
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>

		@stop
