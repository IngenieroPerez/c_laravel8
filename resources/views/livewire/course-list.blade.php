<div class="grid grid-cols-3 gap-4 mt-8">
    @foreach($courses as $course)
    <div class="ng-white shadow-lg rounded-lg px-4 py-6 text-center">
        <a href="#">´
            <img src="{{ $course->image }}" alt="" class="rounded-md mb-2">
        </a>
        <h2 class="text-lg text-gray-600 truncate uppercase">{{ $course->name }}</h2>
        <h3 class="text-lg text-gray-500">{{ $course->excerpt }}</h3>

        <img src="{{ $course->user->avatar }}" alt="" class="rounded-full mt-4 mx-auto h-16 w-16">
    </div>
    @endforeach
</div>
