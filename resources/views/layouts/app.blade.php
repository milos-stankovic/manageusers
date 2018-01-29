@extends('admin-lte::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('sidebar-menu')

<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATOR</li>
  <li class="active">
    <a href="{{ route('home') }}">
      <i class="fa fa-home"></i>
      <span>Home</span>
    </a>
  </li>
  @if(auth()->user()->is_admin == 1)
  <li>
    <a href="{{ route('users.index') }}">
      <i class="fa fa-home"></i>
      <span>Users</span>
    </a>
  </li>
  @endif
</ul>

@include('sweetalert::cdn')
@include('sweetalert::view')
@endsection
