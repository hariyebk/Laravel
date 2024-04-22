<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Learning Laravel </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <nav class="bg-gray-600 py-5 px-20 mb-10 flex items-center justify-between text-base text-white">
        <div class="space-x-5">
            <x-navlink href="/" active="{{ request()->is('/') }}"> Home </x-navlink> &nbsp;
            <x-navlink href="about"  active="{{ request()->is('about') }}"> About </x-navlink> &nbsp;
            <x-navlink href="contact"  active="{{ request()->is('contact') }}"> Contact </x-navlink>
        </div>
        <div class="flex items-center space-x-10">
            <p> Notifications </p>
            <p> Avatar </p>
        </div>
    </nav>
    <section class="ml-20">
        <header class="mb-14 text-black text-3xl font-bold font-mono"> 
            <h2> {{ $heading }} </h2>
        </header>
        {{ $slot }}
    </section>
</body>
</html>