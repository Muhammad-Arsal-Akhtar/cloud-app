<div>
    <!-- Open the modal using ID.showModal() method -->
   
   <dialog id="addfile" class="modal modal-bottom sm:modal-middle" wire:ignore.self>
     <div class="modal-box">
        <div class="flex items-center justify-between">
            <h3 class="text-lg font-bold">Add File</h3>
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn btn-xs btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
              </form>
        </div>
        
        <div
        x-data="{ isUploading: false, progress: 0 }"
        x-on:livewire-upload-start="isUploading = true"
        x-on:livewire-upload-finish="isUploading = false"
        x-on:livewire-upload-error="isUploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">

            <!-- Progress Bar -->
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>
        
        <form class="mt-4" wire:submit.prevent="store">
            <div class="mb-2">
                <label for="title"></label>
                <input
                type="title"
                placeholder="Enter the title"
                class="w-full input input-bordered input-warning" id="title" wire:model="title" />
                @error('title')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-2">
                <label for="image"></label>
                <input type="file" class="w-full file-input file-input-bordered" id="image" wire:model="image" />
                @error('image')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            @if ($image)
                <img src="{{ $image->temporaryUrl() }}">
            @endif

            <div class="mb-2">
                <button class="w-full btn btn-warning">Add</button>
            </div>
          </form>
        </div>
        
     </div>
   </dialog>
   
   </div>