@extends('layouts.web')

@section('content')
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Curso') }}
            </h2>
        </x-slot>

        <div class="container mx-auto">
            <div class="grid grid-cols-3 gap-3 mt-8">
                <div class="p-8 bg-gray-200 col-span-1">
                    <ul class="flex flex-col">
                        <li class="font-medium text-sm text-gray-400 capitalize mb-4">Contenido</li>
                        @foreach ($course->posts as $post)
                            <li class="flex text-gray-600 mt-2">{{ $post->name }}</li>
                            @if ($post->free)
                                <span class="text-xs text-gray-500 font-semibold bg-gray-300 rounded-full ml-auto">Gratis</span>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="text-gray-700 col-span-2">
                    <img src="{{ $course->image }}">
                    <h2 class="text-4xl">{{ $course->name }}</h2>
                    <p>{{ $course->description }}</p>
                    <div class="flex mt-3">
                        <img src="{{ $course->user->avatar }}" class="h-10 w-10 rounded-full mr-2">
                        <div>
                            <p class="text-gray-500 text-sm">{{ $course->user->name }}</p>
                            <p class="text-gray-300 text-xs">{{ $course->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4 my-8">
                            @foreach ($course->similar() as $course)
                                <x-course-card :course="$course" />
                            @endforeach
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <h1 class="text-3xl text-gray-700 mb-2 uppercase">Últimos cursos</h1>
                <h2 class="text-xl text-gray-600">Fórmate online como profesional en tecnología</h2>
            </div>
        </div>
    </x-app-layout>
    @livewire('course-list')
@endsection
