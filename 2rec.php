<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $color = $_POST["color"];
        if (strtolower($color) == "rojo") {
            echo "<p>Congratulations! You guessed the color.</p>";
            echo "<p>Game finished.</p>";
        } else {
            echo "<p>Your guess is incorrect. Try again.</p>";
        }
    }
?>