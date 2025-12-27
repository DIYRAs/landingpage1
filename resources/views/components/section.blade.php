@props([
    'heading' => 'Lorem Ipsum',
    'subHeading' => 'Lorem ipsum dolor sit amet',
])

<section {{ $attributes->merge(['class' => 'py-10 flex flex-col gap-y-7 items-center justify-center']) }}>
    <div class="flex flex-col lg:flex-row text-center lg:items-center justify-between w-full flex-1 gap-x-10">
        <h2 class="lg:text-3xl text-2xl font-bold">
            {{ $heading }}
        </h2>
        <p class="lg:max-w-6/12 text-xs">
            {{ $subHeading }}
        </p>
    </div>

    {{ $slot }}
</section>
