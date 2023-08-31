<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div class="bg-white shadow-lg rounded-lg px-4 py-6">
            <a href="#">
                <img src="{{ $course->image }}" class="rounded-md mb-2">
                <h2 class="text-lg text-gray-600 truncate font-bold">{{ $course->name }}</h2>
                <h3 class="text-md text-gray-500">{{ $course->excerpt }}</h3>
                <img src="{{ $course->user->avatar }}" class="rounded-full mt-4 h-8 w-8">
            </a>
        </div>
    @endforeach
</div>
