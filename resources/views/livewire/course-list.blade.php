<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach ($courses as $course)
        <div wire:key="{{ $course->id }}">
            <x-course-card :course="$course" />
        </div>
    @endforeach
</div>
