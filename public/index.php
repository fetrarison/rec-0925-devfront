<?php

function formatUrl($string) {
    $string = strtolower($string);
    $string = preg_replace('~[^a-z0-9 -]~', '', $string); 
    $string = preg_replace('~[ -]+~', '-', $string); 
    return $string;
}


$requestUri = $_SERVER['REQUEST_URI'];

$segments = explode('/', trim($requestUri, '/'));
$candidateName = $segments[0]; 
$pageSlug = isset($segments[1]) ? $segments[1] : ''; 

$candidateNameFormatted = formatUrl($candidateName);
$pageSlugFormatted = formatUrl($pageSlug);

if ($candidateNameFormatted === 'fetrarison' && $pageSlugFormatted === 'completez-votre-reservation') {
    include('fetrarison-completez-votre-reservation.html');
} elseif ($candidateNameFormatted === 'fetrarison' && $pageSlugFormatted === 'paiement') {
    include('fetrarison-paiement.html');
} else {
   
    echo "Page non trouvée.";
}

?>
