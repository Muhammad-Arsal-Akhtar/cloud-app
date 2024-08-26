<div>
  <div>
    <div class="flex flex-col justify-center item-center">

        <input type="text" placeholder="Type here" class="mx-auto mb-6 w-96 input input-bordered rounded-xl" wire:model.debounce.900ms="search" />
        
        
        <div class="grid grid-cols-1 gap-2 md:grid-cols-2 lg:grid-cols-3 place-items-center">
            
            @if (count($files) > 0)
                @foreach ($files as $file)
                    <div class="mb-16 shadow-xl w-72 card card-compact bg-base-100">
                        
                        <a href="{{ route('show.file', ['fileid' => $file->id]) }}">
                            <figure> <img
                            src="{{asset('storage/'.$file->image)}}"
                            alt="Shoes" class="object-contain w-full h-52" />
                            </figure>
                        </a>
                        
                        <div class="card-body">
                        <h2 class="card-title">{{ ucfirst($file->title) }}</h2>
                        <p>{{ $file->created_at }}</p>
                        <div class="justify-end card-actions">
                            
                                <button class="btn btn-error" @click="$dispatch('open-modal', {{ $file->id }})">Delete it
                                </button>

                        </div>
                        </div>
                    </div>
                @endforeach
            @else
            <p>No Record Exist.</p>
            @endif
            
        </div>
    </div>

    <div class="px-10 text-center lg:px-32">
        {{ $files->links() }}
    </div>

    <livewire:files.delete-file  />
    
    
  </div>
</div>

