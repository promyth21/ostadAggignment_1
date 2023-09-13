<!DOCTYPE html>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        $number = $_POST["number"];
        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                echo "<h1>$number is an even number.</h1>";
            } else {
                echo "<h1>$number is an odd number.</h1>";
            }
        } else {
            echo "<p>Please enter a valid number.</p>";
        }

    ?>