@extends('layouts.web')

@section('content')
        <div class="container mx-auto">
            @auth
                <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ url('login') }}" class="text-sm text-gray-700 underline">Login</a>
                <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endauth
        </div>
@endsection
