
		@extends('master')
        
        @section('title') Comments @stop

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
        <?php $comments = Comment::all(); ?>

        @include('common-navigation')
                      
                <div class="container-fluid">
                 
                    <h1><i class="fa fa-users"></i> User Comments Assigned to {{ $user->username }} <a href="/user-dashboard/{{ $user->id }}" class="btn btn-default pull-right">Return to User Dashboard</a></h1>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Comment Title</th>
                                    <th>Comment Text</th>
                                    <th>Date/Time Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- List the comments that the current user is assigned to -->
                                <?php foreach($comments as $comment): ?>
                                <?php if ($comment->intended_user != $user->id) continue; ?>
                                <tr>
                                    <td>{{ $comment->comment_title }}</td>
                                    <td>{{ $comment->comment_text }}</td>
                                    <td>{{ $comment->created_at->format('F d, Y h:ia') }}</td>
                                    <td>
                                        <a href="/edit-comment/{{ $user->id }}/{{ $comment->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                                        {{ Form::open(['url' => '/user-comment/' .$user->id . '/' . $comment->id, 'method' => 'DELETE']) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

                    <h1><i class="fa fa-users"></i> User Comments From {{ $user->username }} <a href="/user-dashboard/{{ $user->id }}" class="btn btn-default pull-right">Return to User Dashboard</a></h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Comment Title</th>
                                    <th>Comment Text</th>
                                    <th>Date/Time Created</th>
                                    <th></th>
                                </tr>
                            </thead>
                 
                            <tbody>
                                <!-- List the comments that the current user is assigned to -->
                                @foreach($user['comments'] as $comment)
                                <tr>
                                    <td>{{ $comment->comment_title }}</td>
                                    <td>{{ $comment->comment_text }}</td>
                                    <td>{{ $comment->created_at->format('F d, Y h:ia') }}</td>
                                    <td>
                                        <a href="/edit-comment/{{ $user->id }}/{{ $comment->id }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
                                        {{ Form::open(['url' => '/user-comment/' .$user->id . '/' . $comment->id, 'method' => 'DELETE']) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                 
                    <a href="/create-comment/{{ $user->id }}" class="btn btn-success">New Comment</a>
                 
                @if ( Session::has('flash_message') )            
                  <div class= "alert {{ Session::get('flash_type') }}">
                      <h3>{{ Session::get('flash_message') }}</h3>
                  </div>              
                @endif

                @foreach($errors->all() as $message)
                    <div>{{ $message }}</div>
                @endforeach


                </div>
                
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/bootstrap.js"></script>

		@stop
