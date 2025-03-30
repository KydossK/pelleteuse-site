@extends('layouts.admin')

@section('content')

@if(session('success'))
    <p class="text-green-600 mb-4">{{ session('success') }}</p>
@endif

<form action="{{ route('admin.photos.store') }}" method="POST" enctype="multipart/form-data" class="mb-8">
    @csrf
    <input type="file" name="photo" required class="mb-2">
    <button type="submit" class="bg-primary text-white px-4 py-2 rounded">Ajouter une photo</button>
</form>


    <h1 class="text-2xl font-bold mb-4">Galerie de photos</h1>

    <div class="flex flex-wrap justify-center gap-4">
        @forelse ($photos as $photo)
        <div class="relative w-[150px] h-[150px] bg-gray-300 overflow-hidden rounded">
            <img src="{{ asset('storage/' . $photo->path) }}"
                 class="absolute inset-0 w-full h-full object-cover z-0"
                 alt="photo chantier">
        
            <form action="{{ route('admin.photos.destroy', $photo) }}" method="POST"
                  class="absolute bottom-1 left-1 z-10">
                @csrf
                @method('DELETE')
                <button class="text-sm bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700 shadow">
                    ✕
                </button>
            </form>
        </div>        


    @empty
        <p>Aucune photo enregistrée pour le moment.</p>
    @endforelse
    
    </div>
@endsection
