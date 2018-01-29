{{-- \resources\views\users\index.blade.php --}}
@extends('layouts.app')

@section('title', '| Users')

@section('content')

    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> User Administration   <a href="{{ route('users.create') }}" class="btn btn-success pull-right">Add User</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>Last Login</th>
                    <th>Operations</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $user)
                    <tr>

                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                        <td>{{$user->last_login_at ? $user->last_login_at->format('F d, Y h:ia') : ''}}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger confirm']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            {{ $users->links() }}
        </div>

    </div>

@endsection
