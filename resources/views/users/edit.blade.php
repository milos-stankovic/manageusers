{{-- \resources\views\users\edit.blade.php --}}

@extends('layouts.app')

@section('title', '| Edit User')

@section('content')

    <div class='col-lg-4 col-lg-offset-4'>

        <h1><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h1>
        <hr>

        {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

        <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text" value="{{$user->name}}" id="name">
            @if ($errors->has('name'))
                <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email</label>
            <input class="form-control" name="email" type="email" value="{{$user->email}}" id="email">
            @if ($errors->has('email'))
                <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Password</label><br>
            <input class="form-control" name="password" type="password" value="" id="password">
            @if ($errors->has('password'))
                <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password">Confirm Password</label><br>
            <input class="form-control" name="password_confirmation" type="password" value="">
            @if ($errors->has('password_confirmation'))
                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}

    </div>

@endsection