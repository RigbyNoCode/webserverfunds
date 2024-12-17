<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form values
    $water = isset($_POST['water']) ? $_POST['water'] : '';
    $lowtaper = isset($_POST['lowtaper']) ? $_POST['lowtaper'] : '';

    // Define correct answers
    $correctWater = "Still";
    $correctLowTaper = "Absolutely";

    // Check answers
    $isWaterCorrect = ($water === $correctWater);
    $isLowTaperCorrect = ($lowtaper === $correctLowTaper);

    // Output results
    echo "<h1>Quiz Results</h1>";

    if ($isWaterCorrect && $isLowTaperCorrect) {
        echo "<p>Congratulations! You got both answers correct.</p>";
    } else {
        echo "<p>Oops! Some of your answers were incorrect.</p>";
        echo "<ul>";
        if (!$isWaterCorrect) {
            echo "<li>You selected: '$water' for water. The correct answer is 'Still Water.'</li>";
        }
        if (!$isLowTaperCorrect) {
            echo "<li>You selected: '$lowtaper' for low taper fade. The correct answer is 'Absolutely.'</li>";
        }
        echo "</ul>";
    }

    // Provide a link to go back to the form
    echo "<p><a href='javascript:history.back()'>Go back to the form</a></p>";
} else {
    // Handle the case where the page is accessed without submitting the form
    echo "<p>Please submit the form first.</p>";
    echo "<p><a href='javascript:history.back()'>Go back to the form</a></p>";
}
?>
