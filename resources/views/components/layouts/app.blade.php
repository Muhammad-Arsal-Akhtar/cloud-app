<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'My Files' }}</title>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet" type="text/css" />

        <script src="https://cdn.tailwindcss.com"></script>
        {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

        {{-- LiveWire Styles --}}
        @livewireStyles
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        
    </head>
    <body x-data="{
        currenttheme : localStorage.getItem('currenttheme') ?? 'bumblebee',
        init()
        {
        document.querySelector('html').setAttribute('data-theme', this.currenttheme)
        },
        changetheme(){
        this.currenttheme = this.currenttheme  == 'bumblebee' ? 'halloween' : 'bumblebee'
        localStorage.setItem('currenttheme', this.currenttheme)
        document.querySelector('html').setAttribute('data-theme', this.currenttheme)
        }
    }" >
    {{-- class="h-screen bg-gray-400" --}}
        {{-- <h1 class="px-4 py-4 text-white bg-orange-400">hellow world</h1> --}}

        <x-commons.nav />
        <x-commons.toast />
        {{ $slot }}

        <x-commons.footer />

        {{-- Livewire Scripts --}}
        @livewireScripts
    </body>
</html>
