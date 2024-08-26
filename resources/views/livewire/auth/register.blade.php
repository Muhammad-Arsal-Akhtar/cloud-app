<div>
 
    <div class="flex items-start justify-center h-screen lg:items-center md:items-start">
         
         <form class="w-[500px]" wire:submit.prevent="registerUser">
             <div class="flex items-center justify-between mb-2">
                <div>
                 <h2 class="text-2xl font-bold">Register</h2>
                 <p>Welcome to cloude file</p>  
                </div>
                
                <x-commons.themeSwitch />

             </div>
             <div class="mb-2">
                <label for="name"></label>
                <input
                type="name"
                placeholder="Enter the name"
                class="w-full input input-bordered input-warning" id="name" wire:model="name" />
                @error('name')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
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
                <label for="confirm-password"></label>
                <input
                type="password"
                placeholder="Confirm Password"
                class="w-full input input-bordered input-warning" id="confirm-password" wire:model="password_confirmation" />
                @error('password_confirmation')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
             <div class="mb-2">
                 <button class="w-full btn btn-warning">Sumbit</button>
             </div>
             
             <p class="text-center">--OR--</p>
             <p class="text-center">Already have an account? <a href="{{route('login')}}" class="font-extrabold text-warning">Login</a></p>
             
         </form>
         
     </div>
 </div>
 