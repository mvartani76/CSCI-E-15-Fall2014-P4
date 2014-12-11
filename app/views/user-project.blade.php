 
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
                 
                    <h2><i class="fa fa-users"></i> <i class= "text-info">{{ $user->username }}</i> User Projects
                            @if ( Session::has('flash_message') )            
                            <div class= "alert error-alert text-danger  {{ Session::get('flash_type') }}">
                                {{ Session::get('flash_message') }}
                            </div>              
                            @endif

                            @foreach($errors->all() as $message)
                                <div>{{ $message }}</div>
                            @endforeach
                            <a href="/user-dashboard/{{ $user->id }}" class="btn btn-default pull-right">Return to User Dashboard</a></h2>
                 
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="tablecell-size1">Project Name</th>
                                    <th class="tablecell-size6">Project Description</th>
                                    <th class="tablecell-size5">Date/Time Created</th>
                                    <th class="tablecell-size5">Date/Time Last Modified</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                 
                            <tbody>
                                <!-- List the projects that the current user is assigned to -->
                                @foreach($user['projects'] as $project)
                                <tr>
                                    <td class="tablecell-size1">{{ $project->project_name }}</td>
                                    <td class="tablecell-size6">{{ $project->project_description }}</td>
                                    <td class="tablecell-size5">{{ $project->created_at->format('F d, Y h:ia') }}</td>
                                    <td class="tablecell-size5">{{ $project->updated_at->format('F d, Y h:ia') }}</td>
                                    <td>
                                        <a href="/edit-project/{{ $user->id }}/{{ $project->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                                        {{ Form::open(['url' => '/user-project/' .$user->id . '/' . $project->id, 'method' => 'DELETE']) }}
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
