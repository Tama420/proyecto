<?php
  // Generate a random number between 1 and 100
  $number = rand(1, 100);

  // Check if the form has been submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user's guess
    $guess = $_POST["guess"];

    // Check if the guess is correct
    if ($guess == $number) {
      echo "Congratulations! You guessed the number.";
    }
    // Check if the guess is too high or too low
    else if ($guess > $number) {
      echo "Your guess is too high. Try again.";
    }
    else {
      echo "Your guess is too low. Try again.";
    }
  }
?>