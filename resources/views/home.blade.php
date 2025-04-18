@extends('layouts.public') 

@section('title', 'Accueil')

@section('content')


<!-- HEADER -->
<header class="bg-[#DEAC23] text-black py-10 px-4 shadow-lg rounded-b-2xl">
    <div class="max-w-7xl mx-auto text-center space-y-3">
        
        <!-- Nom du site -->
        <h1 class="text-4xl mb-6 sm:text-5xl font-extrabold tracking-wide">
            ECO-SANIT-TP
        </h1>

        <!-- Sous-titre / spécialité -->
        <h2 class="text-lg sm:text-xl font-medium text-gray-800">
            Travaux à la mini-pelleteuse 800kg – terrassement, dessouchage, assainissement, nivellement...
        </h2>

        <!-- Accroche principale -->
        <p class="text-xl sm:text-2xl ">
            Intervention rapide pour vos petits et moyens travaux, sans les délais des gros acteurs.
        </p>
    </div>
</header>



    <!-- REALISATIONS -->
    <section class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Engagement -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded shadow-lg flex flex-col justify-center">
                    <h3 class="text-xl font-bold mb-4">Notre engagement</h3>
                    <p class="text-base leading-relaxed">
                        Depuis 1999, nous mettons notre savoir-faire au service de chantiers à taille humaine. 
                        Nous privilégions la proximité, la réactivité et l’écoute pour vous proposer des interventions efficaces et adaptées.
                        Grâce à une structure souple et à la possibilité de louer du matériel plus imposant, 
                        nous répondons à tous types de besoins sans délais inutiles.
                    </p>
                </div>

                <!-- Galerie photos -->
                <div>
                    <h2 class="text-2xl font-bold mb-6">Nos Réalisations</h2>
                    <div class="h-[300px] overflow-y-hidden flex flex-wrap items-start gap-4">
                        @foreach ($photos as $photo)
                            <div class="rounded shadow overflow-hidden">
                                <img 
                                    src="{{ asset('storage/' . $photo->path) }}"
                                    class="h-auto max-h-[150px] object-cover rounded"
                                    alt="Photo chantier"
                                >
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- INFOS CONTACT -->
<section class="bg-[#DEAC23] text-black py-10 px-4">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-2xl font-bold mb-6">Informations de contact</h2>
        <ul class="space-y-5 text-base">
            <!-- Société -->
            <li class="flex items-start gap-x-4">
                <svg class="w-6 h-6 text-black mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M3 3h18v18H3V3z" />
                </svg>
                <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-x-2">
                    <span class="font-semibold">Nom de la société :</span>
                    <span>ECO-SANIT-TP</span>
                </div>
            </li>

            <!-- Téléphone -->
            <li class="flex items-start gap-x-4">
                <svg class="w-6 h-6 text-black mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M22 16.92V21a1 1 0 0 1-1.09 1A19.9 19.9 0 0 1 3 5.09A1 1 0 0 1 4 4h4.09a1 1 0 0 1 1 .75c.3 1.23.84 2.41 1.6 3.45a1 1 0 0 1-.25 1.39L9.03 11a16 16 0 0 0 6.94 6.94l1.41-1.41a1 1 0 0 1 1.39-.25c1.04.76 2.22 1.3 3.45 1.6a1 1 0 0 1 .75 1z" />
                </svg>
                <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-x-2">
                    <span class="font-semibold">Téléphone :</span>
                    <span>06 10 02 16 53</span>
                </div>
            </li>

            <!-- Adresse -->
            <li class="flex items-start gap-x-4">
                <svg class="w-6 h-6 text-black mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
                    <circle cx="12" cy="9" r="2.5" />
                </svg>
                <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-x-2">
                    <span class="font-semibold">Adresse :</span>
                    <span>15 ruelle du Curé, Neuve-Chapelle, 62840</span>
                </div>
            </li>

            <!-- Email -->
            <li class="flex items-start gap-x-4">
                <svg class="w-6 h-6 text-black mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4V4z" />
                    <polyline points="22,6 12,13 2,6" />
                </svg>
                <div class="flex flex-col sm:flex-row sm:items-baseline sm:gap-x-2">
                    <span class="font-semibold">Email :</span>
                    <span>eco-sanit-tp@gmail.fr</span>
                </div>
            </li>
        </ul>
    </div>
</section>




<!-- NOS POINTS FORTS -->
<section class="bg-[#fef9ec] py-8">
    <div class="max-w-6xl mx-auto px-4">
        <h2 class="text-2xl sm:text-3xl font-bold text-center mb-10">Nos points forts</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <!-- Expérience -->
            <div class="bg-white/70 dark:bg-gray-800 rounded-xl shadow-md p-6 flex flex-col items-center transition duration-300 hover:scale-[1.02]">
                <div class="mb-4">
                    <svg width="64" height="64" class="text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 15l-5.878 3.09 1.122-6.545L.488 6.91l6.561-.955L10 0l2.951 5.955 6.561.955-4.756 4.635 1.122 6.545z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Expérience</h3>
                <p>
                    Depuis 1999,<br>
                    plus de 20 ans<br>
                    de savoir-faire au service de<br>
                    vos chantiers
                </p>
            </div>

            <!-- Réactivité -->
            <div class="bg-white/70 dark:bg-gray-800 rounded-xl shadow-md p-6 flex flex-col items-center transition duration-300 hover:scale-[1.02]">
                <div class="mb-4">
                    <svg width="64" height="64" class="text-yellow-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 2m5-2a9 9 0 1 1-6.219-8.56"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Réactivité</h3>
                <p>
                    Interventions<br>
                    rapides grâce à<br>
                    une structure<br>
                    souple et réactive
                </p>
            </div>

            <!-- Souplesse -->
            <div class="bg-white/70 dark:bg-gray-800 rounded-xl shadow-md p-6 flex flex-col items-center transition duration-300 hover:scale-[1.02]">
                <div class="mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 10h4V6m0 4v4m0-4h4m4 0h4M4 14h4v4m0-4v-4m0 4h4m4 0h4" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold mb-2">Souplesse</h3>
                <p>
                    Matériel adapté<br>
                    à chaque chantier,<br>
                    avec location possible<br>
                    d’engins plus gros
                </p>
            </div>
        </div>
    </div>
</section>




    
<!-- FORMULAIRE CONTACT -->
<section class="mt-8 mb-8 px-8">
    <div class="max-w-5xl mx-auto">
        <div class="bg-[#DEAC23] text-black p-8 rounded-2xl shadow-md">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Contactez-nous</h2>

            {{-- Texte d’introduction --}}
            <p class="text-center text-gray-700 text-base mb-6 leading-relaxed">
                Merci de nous indiquer votre localisation ainsi que quelques précisions sur votre besoin.<br>
                Vous pouvez également ajouter votre numéro de téléphone si vous souhaitez être rappelé(e).
            </p>

            <form method="POST" action="{{ route('contact.send') }}" class="flex flex-col items-center space-y-4">
                @csrf
            
                <input type="text" name="name" placeholder="Votre nom complet"
                    class="w-[90%] mx-auto border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 bg-white text-black"
                    required>
            
                <input type="email" name="email" placeholder="Adresse e-mail"
                    class="w-[90%] mx-auto border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 bg-white text-black"
                    required>
            
                <textarea name="message" placeholder="Votre message..." rows="5"
                    class="w-[90%] mx-auto border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-yellow-500 bg-white text-black"
                    required></textarea>
            

                {{-- CAPTCHA + Bouton dans un conteneur flex --}}
                <div class="flex flex-col items-center gap-4 mt-6">
                    {{-- Captcha --}}
                    <div id="captcha-container">
                        {!! NoCaptcha::display(['data-callback' => 'onReCaptchaSuccess']) !!}
                        @if ($errors->has('g-recaptcha-response'))
                            <p class="text-red-500 text-sm mt-1">{{ $errors->first('g-recaptcha-response') }}</p>
                        @endif
                    </div>

                    {{-- Bouton "Envoyer" caché au début --}}
                    <div id="submit-button" class="hidden w-full sm:w-auto">
                        <button type="submit"
                        class="bg-[#DE6823] hover:bg-[#DE9023] text-white text-lg font-semibold py-5 px-6 rounded-md shadow-lg transition duration-300 w-full sm:w-[180px]">
                        Envoyer
                    </button>
                    
                    </div>
                </div>

                {{-- Message de succès --}}
                @if (session('success'))
                    <p class="text-green-600 font-semibold mt-2 text-center">{{ session('success') }}</p>
                @endif
            </form>
        </div>
    </div>
</section>


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
