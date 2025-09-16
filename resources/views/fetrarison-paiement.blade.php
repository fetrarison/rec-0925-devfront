<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test psychotechnique - Confirmer et payer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Header -->
    <div class="bg-white border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex items-center gap-3">
                <!-- Nouveau logo -->
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Logo AAAEP" class="h-12"></a>

            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-6">
        <h1 class="text-2xl text-blue-800 font-medium mb-8">Test psychotechnique pour permis de conduire à Montgeron</h1>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <div class="bg-white rounded-lg p-6 mb-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-6">Confirmer et payer</h2>
                    
                    <div class="flex items-start gap-3 mb-8">
                        <div class="text-red-500 mt-1">
                            <i class="fas fa-chart-line text-lg"></i>
                        </div>
                        <div>
                            <div class="font-medium text-gray-800">Date de réservation en forte demande</div>
                            <div class="text-gray-600 text-sm">Les réservations sont fréquentes pour ce centre</div>
                        </div>
                    </div>

                    <h3 class="text-lg font-medium text-gray-800 mb-4">Vos informations personnelles</h3>
                    
                    <div class="space-y-4 mb-8">
                        <input 
                            type="text" 
                            placeholder="Nom Prénom" 
                            class="w-full p-3 bg-gray-100 rounded border-0 placeholder-gray-600 text-gray-800"
                        />
                        <input 
                            type="email" 
                            placeholder="Email" 
                            class="w-full p-3 bg-gray-100 rounded border-0 placeholder-gray-600 text-gray-800"
                        />
                        <input 
                            type="tel" 
                            placeholder="Numéro de téléphone" 
                            class="w-full p-3 bg-gray-100 rounded border-0 placeholder-gray-600 text-gray-800"
                        />
                    </div>

                    <h3 class="text-lg font-medium text-gray-800 mb-4">Votre test psychotechnique</h3>
                    
                    <div class="space-y-4 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-calendar-alt text-gray-400 text-lg"></i>
                            <div>
                                <div class="font-medium text-gray-800">Date</div>
                                <div class="text-gray-600">12 mai 2025</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <i class="fas fa-clock text-gray-400 text-lg"></i>
                            <div>
                                <div class="font-medium text-gray-800">Horaire</div>
                                <div class="text-gray-600">12:30</div>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-3">
                            <i class="fas fa-map-marker-alt text-gray-400 text-lg"></i>
                            <div>
                                <div class="font-medium text-gray-800">Adresse</div>
                                <div class="text-gray-600">39 Rue Emile Steiner, 27200 Vernon</div>
                            </div>
                        </div>
                    </div>

                    <h3 class="text-lg font-medium text-gray-800 mb-4">Choisissez votre moyen de paiement</h3>
                    <div class="flex items-center text-sm text-gray-600 mb-4">
                        <div class="w-4 h-4 bg-black text-white text-xs flex items-center justify-center mr-2 rounded">
                            <i class="fas fa-lock text-xs"></i>
                        </div>
                        100% SÉCURISÉ
                    </div>

                    <div class="space-y-3 mb-8">
                        <label class="flex items-center gap-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600" />
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-5 bg-blue-600 rounded flex items-center justify-center">
                                    <i class="fas fa-credit-card text-white text-xs"></i>
                                </div>
                                <span class="text-gray-800">Carte bancaire</span>
                            </div>
                        </label>
                        
                        <label class="flex items-center gap-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600" />
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-5 bg-black rounded flex items-center justify-center">
                                    <i class="fab fa-apple text-white text-xs"></i>
                                </div>
                                <span class="text-gray-800">Apple Pay</span>
                            </div>
                        </label>
                        
                        <label class="flex items-center gap-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600" />
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-5 bg-blue-600 rounded flex items-center justify-center">
                                    <i class="fab fa-paypal text-white text-xs"></i>
                                </div>
                                <span class="text-gray-800">Paypal</span>
                            </div>
                        </label>
                        
                        <label class="flex items-center gap-3 p-3 border rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment" class="w-4 h-4 text-blue-600" />
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-5 bg-gray-800 rounded flex items-center justify-center text-white text-xs font-bold">
                                    A
                                </div>
                                <span class="text-gray-800">Alma</span>
                            </div>
                        </label>
                    </div>

                    <button class="w-full bg-pink-600 hover:bg-pink-700 text-white font-semibold py-4 px-6 rounded-lg flex items-center justify-center gap-2">
                        Je réserve mon test psychotechnique
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            </div>

            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg p-6">
                    <h3 class="text-lg font-semibold text-pink-600 mb-4">Récapitulatif de votre test psychotechnique</h3>
                    
                    <div class="mb-4">
                        <div class="text-sm text-gray-600 mb-1">Total à payer :</div>
                        <div class="text-2xl font-bold text-gray-800">130.00€</div>
                    </div>
                    
                    <div class="text-xs text-gray-500 mb-6">
                        En passant votre commande, vous acceptez les conditions générales 
                        de vente de la société AA/EP. Veuillez consulter notre politique de 
                        protection des données.
                    </div>

                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-play text-white text-xs"></i>
                                </div>
                            </div>
                            <div class="text-sm font-medium text-gray-800">Entrainement</div>
                            <div class="text-xs text-gray-500">Gratuit illimité</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-calendar-check text-white text-xs"></i>
                                </div>
                            </div>
                            <div class="text-sm font-medium text-gray-800">Résultats</div>
                            <div class="text-xs text-gray-500">le Jour Même</div>
                        </div>
                        
                        <div class="flex flex-col items-center">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-2">
                                <div class="w-6 h-6 bg-green-500 rounded-full flex items-center justify-center">
                                    <i class="fas fa-times-circle text-white text-xs"></i>
                                </div>
                            </div>
                            <div class="text-sm font-medium text-gray-800">Annulation</div>
                            <div class="text-xs text-gray-500">Gratuite jusqu'à 48h</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
