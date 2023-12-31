<div class="bg-white shadow-lg rounded-lg px-4 py-6">
    <a href="{{ route('course', $course->slug) }}">
        <img src="{{ $course->image }}" class="rounded-md mb-2">
        <h2 class="text-lg text-gray-600 truncate font-bold">{{ $course->name }}</h2>
        <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>
        <img src="{{ $course->user->avatar }}" class="rounded-full mt-4 h-8 w-8">
    </a>
</div>
