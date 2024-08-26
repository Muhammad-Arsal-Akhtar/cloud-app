<div>
    
    <div class="flex items-start lg:items-center md:items-start justify-center h-screen">
        
        <form class="w-[500px]" wire:submit.prevent="loginUser">
            <x-commons.alert />
            <div class="flex items-center justify-between mb-2">
                <div>
                    <h2 class="text-2xl font-bold">Login</h2>
                    <p>Welcome to cloude file login</p>
                </div>
                
                <x-commons.themeSwitch />
                
            </div>
            <div class="mb-2">
                <label for="email"></label>
                <input
                type="email"
                placeholder="Enter the email"
                class="w-full input input-bordered input-warning" id="email" wire:model="email" />
                @error('email')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <label for="password"></label>
                <input
                type="password"
                placeholder="Enter the password"
                class="w-full input input-bordered input-warning" id="password" wire:model="password" />
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-2">
                <button class="w-full btn btn-warning">Sumbit</button>
            </div>
            
            <p class="text-center">--OR--</p>
            <p class="text-center">Dont's have an account? <a href="{{route('register')}}" class="font-extrabold text-warning">Register</a></p>
            
        </form>
        
    </div>
    
</div>
