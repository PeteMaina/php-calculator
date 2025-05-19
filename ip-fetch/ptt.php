<?php
// Tailor categories based on country
$recommended = [];

if ($country === "India") {
    $recommended = ["Spirituality", "Self-help", "Bollywood Biographies"];
} elseif ($country === "Kenya") {
    $recommended = ["African Literature", "Entrepreneurship", "Motivational"];
} elseif ($country === "USA") {
    $recommended = ["True Crime", "Tech & Startups", "Sci-fi"];
} else {
    $recommended = ["Best Sellers", "New Releases", "Top Rated"];
}
?>
