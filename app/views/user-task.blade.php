@extends('master')
        
@section('title') Tasks @stop

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
        <?php $tasks = Task::all(); ?>

        @include('common-navigation')
                      
                <div class="container-fluid">
                 
                    <h2><i class="fa fa-users"></i> User Tasks Assigned to: <i class= "text-info"> {{ $user->username }}</i>
                            @if ( Session::has('flash_message') )            
                                <div class= "alert error-alert text-danger {{ Session::get('flash_type') }}">
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
                                    <th class="tablecell-size2">Task Title</th>
                                    <th class="tablecell-size2">Task Text</th>
                                    <th class="tablecell-size4">Date/Time Created</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- List the tasks that the current user is assigned to -->
                                @foreach($user['tasks'] as $task)
                                <tr>
                                    <td class="tablecell-size2">{{ $task->task_title }}</td>
                                    <td class="tablecell-size2">{{ $task->task_text }}</td>
                                    <td class="tablecell-size4">{{ $task->created_at->format('F d, Y h:ia') }}</td>
                                    <td>
                                        {{ Form::open(['url' => '/user-task/' .$user->id . '/' . $task->id, 'method' => 'DELETE']) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>                 
                    <a href="/create-task/{{ $user->id }}" class="btn btn-success">New Task</a>
                </div>
                
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>

@stop
