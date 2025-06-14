@extends('layouts.app')
@section('content')
    <h1>welcome to your Dashboard, {{ auth()->user()->name }}</h1>
    <!-- Add widgets and info for clients here -->
@endsection
