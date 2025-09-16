<?php
function formatUrl($string) {
    $string = strtolower($string);
    $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
    $string = preg_replace('~[^a-z0-9-]+~', '-', $string);
    $string = trim($string, '-');
    return $string;
}

$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/rec-0925-devfront/public';
$path = str_replace($basePath, '', $requestUri);
$path = trim($path, '/');

$segments = explode('/', $path);
$candidateName = $segments[0] ?? '';
$pageSlug = $segments[1] ?? '';

$candidateName = formatUrl($candidateName);
$pageSlug = formatUrl($pageSlug);

if ($candidateName === 'fetrarison' && $pageSlug === 'completez-votre-reservation') {
    include('fetrarison-completez-votre-reservation.html');
} elseif ($candidateName === 'fetrarison' && $pageSlug === 'paiement') {
    include('fetrarison-paiement.html');
} else {
    http_response_code(404);
    echo "<h1>404 - Page non trouvée</h1>";
}
