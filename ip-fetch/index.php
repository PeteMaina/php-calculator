<?php
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
    return $_SERVER['REMOTE_ADDR'];
}

$user_ip = getUserIP();

// Use a free geolocation API (e.g., ip-api.com)
$geo = json_decode(file_get_contents("http://ip-api.com/json/{$user_ip}"));

$country = $geo->country ?? 'Unknown';
$city = $geo->city ?? 'Unknown';
$timezone = $geo->timezone ?? 'Unknown';
?>
