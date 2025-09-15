<?php

// Fonction pour transformer une chaîne de texte en un format conforme (minuscules, accents supprimés, espaces → tirets)
function formatUrl($string) {
    $string = strtolower($string); // Convertir en minuscules
    $string = preg_replace('~[^a-z0-9 -]~', '', $string); // Supprimer les caractères non autorisés
    $string = preg_replace('~[ -]+~', '-', $string); // Remplacer espaces et tirets multiples par un seul tiret
    return $string;
}

// Récupérer l'URL
$requestUri = $_SERVER['REQUEST_URI'];

// Extrait le nom de famille et le slug à partir de l'URL
$segments = explode('/', trim($requestUri, '/'));
$candidateName = $segments[0]; // Nom de famille
$pageSlug = isset($segments[1]) ? $segments[1] : ''; // Slug de la page

// Transforme le nom de famille et le slug pour correspondre au format
$candidateNameFormatted = formatUrl($candidateName);
$pageSlugFormatted = formatUrl($pageSlug);

// Vérifier et inclure la bonne page HTML
if ($candidateNameFormatted === 'fetrarison' && $pageSlugFormatted === 'completez-votre-reservation') {
    include('fetrarison-completez-votre-reservation.html');
} elseif ($candidateNameFormatted === 'fetrarison' && $pageSlugFormatted === 'paiement') {
    include('fetrarison-paiement.html');
} else {
    // Page par défaut ou page 404 si l'URL n'est pas reconnue
    echo "Page non trouvée.";
}
?>
