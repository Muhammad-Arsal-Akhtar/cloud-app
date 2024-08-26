<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="bumblebee">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Page' }}</title>
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
    }" class="overflow-x-hidden md:overflow-y-hidden">

        <div class="grid grid-cols-1 gap-2 gap-y-5 sm:grid-cols-2">
            <div>
                <img src="{{asset('images/5161722_2694556.svg')}}" alt="alt_images" class="object-contain w-full" />
            </div>

            {{ $slot }}
        </div>
        

        {{-- Livewire Scripts --}}
        @livewireScripts
    </body>
</html>
