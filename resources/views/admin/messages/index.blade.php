@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6 text-gray-800 dark:text-white border-b pb-2 border-gray-300 dark:border-gray-700">
        📬 Messages reçus
    </h1>

    <div class="space-y-6">
        @forelse($messages as $message)
            <div class="p-6 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-sm hover:shadow-md transition duration-200">
                <div class="space-y-1 text-gray-800 dark:text-gray-100">
                    <p><span class="font-semibold">Nom :</span> {{ $message->name }}</p>
                    <p><span class="font-semibold">Email :</span> <a href="mailto:{{ $message->email }}" class="text-blue-600 dark:text-blue-400 hover:underline">{{ $message->email }}</a></p>
                    <p><span class="font-semibold">Message :</span><br>{{ $message->message }}</p>
                    <p class="text-sm text-gray-500 mt-3">Reçu le {{ $message->created_at->format('d/m/Y à H:i') }}</p>
                </div>

                {{-- Bouton Supprimer --}}
                <form action="{{ route('admin.messages.destroy', $message) }}" method="POST" onsubmit="return confirm('Supprimer ce message ?');" class="mt-4 text-right">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 text-sm bg-red-100 text-red-700 dark:bg-red-900 dark:text-red-200 rounded hover:bg-red-200 dark:hover:bg-red-800 transition">
                        🗑 Supprimer
                    </button>
                </form>
            </div>
        @empty
            <p class="text-gray-600 dark:text-gray-300">Aucun message reçu.</p>
        @endforelse
    </div>
@endsection
