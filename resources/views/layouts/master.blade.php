<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="scrollbar-width: none;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
        </style>
    @endif
</head>

<body class="relative bg-slate-100 text-black lg:px-14 px-7 py-8">
    {{-- Navbar --}}
    <nav class="h-20 w-full fixed top-0 left-0 z-[999] flex items-center justify-between lg:px-10 px-5 bg-slate-100">
        <div class="flex items-center gap-3">
            <img src="{{ asset('logo.png') }}" alt="logo" class="w-7 h-7 object-center object-cover rounded-full">
            <div class="flex flex-col gap-y-[-6px]">
                <p class="font-bold text-[14px] lg:text-sm">DIRYA</p>
                <span class="font-light lg:text-xs text-[10px]">DIYRLOX</span>
            </div>
        </div>

        <div class="flex items-center">
            <ul class="lg:flex hidden items-center justify-center gap-7 *:hover:text-rose-700 *:transition">
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
            </ul>

            <div class="drawer drawer-end lg:hidden grid">
                <input id="my-drawer-5" type="checkbox" class="drawer-toggle" />
                <div class="drawer-content">
                    <!-- Page content here -->
                    <label for="my-drawer-5" class="drawer-button btn btn-primary">Menu</label>
                </div>
                <div class="drawer-side">
                    <label for="my-drawer-5" aria-label="close sidebar" class="drawer-overlay"></label>
                    <ul class="menu bg-base-200 text-white min-h-full w-80 p-4">
                        <!-- Sidebar content here -->
                        <li><a>Lorem ipsum</a></li>
                        <li><a>Lorem ipsum</a></li>
                        <li><a>Lorem ipsum</a></li>
                        <li><a>Lorem ipsum</a></li>
                        <li><a>Lorem ipsum</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main content --}}
    <main class="flex flex-col items-center min-h-screen justify-center pt-14 *:w-full">
        @yield('main_content')
    </main>

    {{-- Footer --}}
    <footer class="lg:h-[300px] h-full bg-gray-950 text-white p-7 rounded-lg space-y-3">
        <div class="flex items-center justify-between h-4/12 border-b">
            <div>
                <p class="lg:text-2xl text-lg font-bold leading-[1]">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <button class="btn btn-warning btn-xl btn-circle">
                ↗️
            </button>
        </div>

        <div class="flex flex-col lg:flex-row items-center justify-between h-8/12">
            <div class="flex flex-col">
                <p class="lg:text-2xl text-lg font-bold">
                    Lorem
                </p>
                <p class="lg:max-w-6/12 w-full text-xs">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <form action="#" class="flex items-center h-10 *:h-full mt-3">
                    <input type="text" name="emailMsg" placeholder="Send us any message via email"
                        class="ring ring-slate-200 rounded-l-md px-3 text-sm w-full lg:w-4/12">
                    <button type="submit"
                        class="btn ring ring-yellow-300 btn-soft btn-warning rounded-l-none rounded-r-md">Submit</button>
                </form>
            </div>

            <div class="flex lg:justify-between justify-start w-full lg:gap-20 gap-12 mt-5 *:gap-y-0 *:[&_.footerLink]:hover:text-orange-400 **:transition">
                <ul class="flex flex-col gap-3">
                    <li class="font-bold text-lg">Lorem</li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                </ul>
                <ul class="flex flex-col gap-3">
                    <li class="font-bold text-lg">Lorem</li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                </ul>
                <ul class="flex flex-col gap-3">
                    <li class="font-bold text-lg">Lorem</li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                    <li class="footerLink"><a href="#">Ipsum</a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>
