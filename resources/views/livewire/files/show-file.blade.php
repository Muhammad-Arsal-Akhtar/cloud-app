<div>
    <div class="px-10 lg:px-32">
        <p class="text-2xl font-bold">{{ ucfirst($file->title) }}</p>
        <p class="text-sm">{{ $file->created_at }}</p>
        
        <img src="{{ asset('storage/'. $file->image) }}" alt="{{ $file->title }}" class="object-contain w-full mt-4 rounded-lg">

    </div>
</div>
