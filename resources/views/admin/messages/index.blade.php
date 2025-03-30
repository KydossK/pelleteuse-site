@extends('layouts.admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Messages reçus</h1>

    <div class="space-y-4">
        @forelse($messages as $message)
            <div class="p-4 border border-gray-300 rounded bg-white dark:bg-gray-800">
                <p><strong>Nom :</strong> {{ $message->name }}</p>
                <p><strong>Email :</strong> {{ $message->email }}</p>
                <p><strong>Message :</strong><br>{{ $message->message }}</p>
                <p class="text-sm text-gray-500 mt-2">Reçu le {{ $message->created_at->format('d/m/Y H:i') }}</p>
            </div>
        @empty
            <p>Aucun message reçu.</p>
        @endforelse
    </div>
@endsection
