@extends('layouts.master')

@section('main_content')
    <div style="background-image: url({{ asset('bg.png') }});"
        class="lg:h-[85vh] h-full flex flex-col items-center px-7 justify-start lg:pt-20 pt-12 pb-8 text-center gap-y-8 rounded-xl">
        <div class="text-center w-full flex items-center justify-center text-white flex-col gap-y-3">
            <h1 class="lg:text-5xl text-3xl font-black lg:max-w-9/12">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </h1>
            <p class="lg:max-w-9/12 text-xs">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nemo doloribus quae veritatis quas, non
                totam
                ut asperiores velit doloremque aliquam dolorum labore, autem nulla vel distinctio aspernatur eos officiis.
            </p>
        </div>
        <button class="btn lg:hidden btn-outline btn-info w-full">
            EXplore Now
        </button>
        <div
            class="w-full hidden lg:flex flex-wrap py-3 px-4 gap-5 justify-center items-center max-w-9/12 min-h-[150px]
            bg-slate-300/20 backdrop-blur-xs rounded-xl shadow-lg shadow-black/20 *:text-xs *:lg:w-3/12 *:w-full *:ring *:rounded-lg *:py-1 *:lg:h-[40px] *:ring-slate-300/40 text-white
            *:grid *:place-items-center *:text-center *:[&_p]:select-none *:shadow-sm *:shadow-black/50">
            <div>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
            <div>
                <p>Lorem Ipsum dolor sit amet</p>
            </div>
        </div>
    </div>

    <x-section class="h-screen" heading="Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nemo doloribus"
        subHeading="Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nemo doloribus quae veritatis quas, non
                totam ut asperiores velit doloremque aliquam dolorum labore, autem nulla vel distinctio aspernatur eos officiis.">
        <div class="grid lg:grid-cols-4 grid-cols-2 grid-rows-4 lg:grid-rows-2 w-full h-9/12 gap-4">
            <x-card :image="null" title="Lorem Ipsum" desc="Lorem ipsum dolor sit amet consectetur adipisicing"
                size='w-full h-full' class='col-span-2 row-span-2' />

            <x-card :image="null" title="Lorem Ipsum" desc="Lorem ipsum dolor sit amet consectetur adipisicing"
                size='w-full h-full' class='col-span-1 row-span-2' />

            <x-card :image="null" title="Lorem Ipsum" desc="Lorem ipsum dolor sit amet consectetur adipisicing"
                size='w-full h-full' class='col-span-1 row-span-1' />

            <x-card :image="null" title="Lorem Ipsum" desc="Lorem ipsum dolor sit amet consectetur adipisicing"
                size='w-full h-full' class='col-span-1 row-span-1' />
        </div>
    </x-section>

    <x-section class="lg:h-[70vh] h-full" heading="Lorem ipsum dolor sit amet consectetur adipisicing elit."
        subHeading="Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nemo doloribus quae veritatis quas.">
        <div class="flex flex-col lg:flex-row flex-[2] items-center justify-center w-full h-full lg:py-10 py-3 gap-10">
            <div class="lg:w-1/2 w-full h-full grid grid-cols-2 *:bg-gray-200 gap-3 *:rounded-lg *:py-4 *:px-5">
                <div class="flex flex-col justify-between">
                    <p class="text-3xl font-bold">00+</p>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex flex-col justify-between !bg-black text-white">
                    <p class="text-3xl font-bold">00+</p>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-3xl font-bold">00+</p>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="flex flex-col justify-between">
                    <p class="text-3xl font-bold">00+</p>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
            </div>

            <div class="h-full lg:w-1/2 w-full flex flex-col-reverse lg:flex-row items-center justify-center gap-3">
                <div class="flex flex-col justify-between gap-4 flex-1">
                    <p class="text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe nisi reiciendis laborum at. Sapiente,
                        porro. Nihil voluptas doloribus, quis dolor maxime explicabo illum odio molestiae exercitationem
                        vero, iusto iure cupiditate?
                    </p>
                    <button class="btn btn-warning btn-xl btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-move-up-right-icon lucide-move-up-right">
                            <path d="M13 5H19V11" />
                            <path d="M19 5L5 19" />
                        </svg>
                    </button>
                </div>
                <img src="{{ asset('logo.png') }}" alt="Image"
                    class="object-center object-cover lg:h-full h-[200px] w-full lg:flex-1 rounded-lg">
            </div>
        </div>
    </x-section>

    <x-section class="lg:h-[90vh] h-screen" heading="Lorem ipsum dolor sit amet consectetur adipisicing elit."
        subHeading="Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nemo doloribus quae veritatis quas.">
        <div
            class="w-full lg:h-10/12 h-full grid lg:grid-cols-3 grid-cols-1 grid-rows-3 lg:grid-rows-1 
                place-items-center gap-5 *:rounded-lg *:object-center *:object-cover *:h-full *:w-full">
            <img src="{{ asset('logo.png') }}" alt="Image">
            <img src="{{ asset('logo.png') }}" alt="Image">
            <img src="{{ asset('logo.png') }}" alt="Image">
        </div>
    </x-section>

    <x-section class="h-[90vh]" heading="Lorem Ipsum">
        <div class="flex overflow-auto flex-wrap items-center gap-6">
            <x-card-comment />
            <x-card-comment />
            <x-card-comment />
            <x-card-comment />
        </div>
    </x-section>
@endsection
