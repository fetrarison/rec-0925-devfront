<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/fetrarison/completez-votre-reservation', 'fetrarison-completez-votre-reservation')
    ->name('reservation');

Route::view('/fetrarison/paiement', 'fetrarison-paiement')
    ->name('paiement');
