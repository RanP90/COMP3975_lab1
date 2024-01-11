<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = isset($_POST["year"]) ? intval($_POST["year"]) : 0;
    $zodiacArray = array(
        "monkey",
        "rooster",
        "dog",
        "pig",
        "rat",
        "ox",
        "tiger",
        "rabbit",
        "dragon",
        "snake",
        "horse",
        "goat"
    );

    if (is_numeric($year) && $year >= 1900 && $year <= date("Y") + 1) {
        $remainder = $year % 12;
        $zodiacSign = $zodiacArray[$remainder];
        $zodiacImage = "images/{$zodiacSign}.png"; 
        echo "<p>Your zodiac sign is $zodiacSign.</p>";
        echo "<img src='$zodiacImage' alt='$zodiacSign'>";
    } else {
        echo "<p>Year must be between 1900 and next year. Please try again.</p>";
    }
}
?>
