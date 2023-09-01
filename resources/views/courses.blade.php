@extends('layouts.web')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Sitio Web') }}
            </h2>
        </x-slot>

        <div class="container mx-auto">
            @livewire('course-list')
        </div>
    </x-app-layout>
@endsection
