<x-layout :title="$title">
    <!-- Your content -->
    <p>Welcome To Home</p>
    <div class="flex mt-3">
        @for ($i = 1; $i <= 10; $i++)
            <div class="w-8 h-8 bg-teal-500 text-white p-0 me-1 text-xs grid place-items-center">
                {{ $i }}</div>
        @endfor
    </div>
    <div>
        {{-- <h1 class="text-xl mt-4 font-medium">This is a First Project of My Laravel Framework</h1> --}}
    </div>
</x-layout>
