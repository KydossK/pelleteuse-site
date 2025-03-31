<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelleteuse Papa - Terrassement</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Outfit:wght@600;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    {!! NoCaptcha::renderJs() !!}
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-[#fefaf2] text-gray-800 dark:bg-gray-900 dark:text-white">
    <!-- HEADER -->
    <header class="bg-[#DEAC23] text-black py-10 px-4 shadow-lg rounded-b-2xl">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl sm:text-5xl font-extrabold mb-2">MINI-PELLETEUSE 700 kg</h1>
            <p class="text-xl sm:text-2xl">Travaux de terrassement pour particuliers</p>
        </div>
    </header>

    <!-- REALISATIONS -->
    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl font-bold mb-6">Nos Réalisations</h2>
            <div class="h-[300px] overflow-y-hidden flex flex-wrap items-start gap-4">
                @foreach($photos as $photo)
                    <div class="rounded shadow overflow-hidden">
                        <img src="{{ asset('storage/' . $photo->path) }}"
                             class="h-auto max-h-[150px] object-cover rounded"
                             alt="Photo chantier">
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- INFOS CONTACT -->
    <section class="bg-[#DEAC23] text-black py-10 px-4">
        <div class="max-w-xl mx-auto">
            <h2 class="text-xl font-bold mb-4">Informations de contact</h2>
            <ul class="space-y-4 text-base">
                <li class="flex items-center gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M3 3h18v18H3V3z" />
                    </svg>
                    <span class="min-w-[200px]"><strong>Nom de la société :</strong></span>
                    <span>Pelleteuse Papa</span>
                </li>
                
            
                <li class="flex items-center gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M22 16.92V21a1 1 0 0 1-1.09 1A19.9 19.9 0 0 1 3 5.09 1 1 0 0 1 4 4h4.09a1 1 0 0 1 1 .75c.3 1.23.84 2.41 1.6 3.45a1 1 0 0 1-.25 1.39L9.03 11a16 16 0 0 0 6.94 6.94l1.41-1.41a1 1 0 0 1 1.39-.25c1.04.76 2.22 1.3 3.45 1.6a1 1 0 0 1 .75 1z" />
                    </svg>
                    <span class="min-w-[200px]"><strong>Téléphone :</strong></span>
                    <span><a href="tel:0601020304" class="underline">06 01 02 03 04</a></span>
                </li>
                
            
                <li class="flex items-center gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                        <circle cx="12" cy="9" r="2.5"/>
                    </svg>
                    <span class="min-w-[200px]"><strong>Adresse :</strong></span>
                    <span>123 Rue des Travaux, 75000 Paris</span>
                </li>
                
            
                <li class="flex items-center gap-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 4h16v16H4V4z" />
                        <polyline points="22,6 12,13 2,6" />
                    </svg>
                    <span class="min-w-[200px]"><strong>Email :</strong></span>
                    <span><a href="mailto:contact@pelleteusepapa.fr" class="underline">contact@pelleteusepapa.fr</a></span>
                </li>
                
            </ul>
            
        </div>
    </section>



<!-- FORMULAIRE CONTACT -->
<section class="py-12 px-4">
    <div class="max-w-lg mx-auto">
        <h2 class="text-xl font-bold mb-6 text-center">Contactez-nous</h2>
        <form method="POST" action="{{ route('contact.send') }}" class="grid gap-4">
            @csrf
        
            <input type="text" name="name" placeholder="Votre nom" class="p-3 rounded bg-[#fff3d4] text-black" required>
            <input type="email" name="email" placeholder="Email" class="p-3 rounded bg-[#fff3d4] text-black" required>
            <textarea name="message" placeholder="Message" rows="4" class="p-3 rounded bg-[#fff3d4] text-black" required></textarea>
        
          {{-- CAPTCHA + Bouton dans un conteneur flex --}}
<div class="flex items-center gap-4">
    {{-- Captcha --}}
    <div id="captcha-container">
        {!! NoCaptcha::display(['data-callback' => 'onReCaptchaSuccess']) !!}
        @if ($errors->has('g-recaptcha-response'))
            <p class="text-red-500 text-sm mt-1">{{ $errors->first('g-recaptcha-response') }}</p>
        @endif
    </div>

    {{-- Bouton "Envoyer" caché au début --}}
    <div id="submit-button" class="hidden flex-grow flex justify-center">
        <button
            type="submit"
            class="bg-[#DE6823] hover:bg-[#DE9023] text-white text-xl font-semibold h-[78px] w-[200px] px-12 rounded shadow-lg transition duration-300"
        >
            Envoyer
        </button>
    </div>
</div>



        
            {{-- Message de succès --}}
            @if (session('success'))
                <p class="text-green-500 font-semibold mt-2 text-center">{{ session('success') }}</p>
            @endif
        </form>
        
        
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center p-4 bg-[#DE7C23] text-white">
    &copy; {{ date('Y') }} Pelleteuse Terrassement – Tous droits réservés
</footer>

<!-- Script pour afficher le bouton Envoyer après validation du reCAPTCHA -->
<script>
    function enableSubmitButton() {
        document.getElementById('submit-button').classList.remove('hidden');
    }

    // Callback pour reCAPTCHA
    function onReCaptchaSuccess() {
        enableSubmitButton();
    }

    // Pour reCAPTCHA invisible (si jamais tu passes à ça un jour)
    // grecaptcha.ready(function() { enableSubmitButton(); });
</script>

<!-- Script de reCAPTCHA (nécessaire pour activer la lib côté client) -->
{!! NoCaptcha::renderJs() !!}

</body>
</html>
