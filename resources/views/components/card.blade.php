@props([
    'image' => null,
    'alt' => 'card image',
    'size' => 'w-full h-full',
    'title' => null,
    'desc' => null,
])

<div {{ $attributes->merge(['class' => 'relative overflow-hidden group flex items-end rounded-lg']) }}>
    @if ($image)
        <img src="{{ $image }}" alt="{{ $alt }}"
            class="absolute inset-0 object-cover object-center {{ $size }}">
    @else
        <img src="{{ asset('logo.png') }}" alt="card image"
            class="absolute inset-0 object-cover object-center {{ $size }}">
    @endif

    <div class="cursor-pointer bg-white rounded-full p-2 absolute top-5 right-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="lucide lucide-heart-icon lucide-heart text-rose-500">
            <path
                d="M2 9.5a5.5 5.5 0 0 1 9.591-3.676.56.56 0 0 0 .818 0A5.49 5.49 0 0 1 22 9.5c0 2.29-1.5 4-3 5.5l-5.492 5.313a2 2 0 0 1-3 .019L5 15c-1.5-1.5-3-3.2-3-5.5" />
        </svg>
    </div>

    <div
        class="py-4 px-3 flex w-full h-max bg-black shadow-[0_0_20px_20px_black]
        text-white backdrop-blur-xs items-center justify-between translate-y-[130%]
        group-hover:translate-y-0 transition">
        <div>
            <p class="text-[100%] font-bold">{{ $title }}</p>
            <p class="text-[80%]">{{ $desc }}</p>
        </div>
        <button class="btn btn-soft btn-primary">
            Check it
        </button>
    </div>
</div>
