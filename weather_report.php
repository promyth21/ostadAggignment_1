<?php
    $temperature = 25;
    if ($temperature < 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature >= 0 && $temperature < 24) {
        echo "<h1>It's cool.</h1>";
    } elseif ($temperature >= 24 && $temperature < 30) {
        echo "<h1>It's warm.</h1>";
    } elseif($temperature >= 30 && $temperature < 50){
        echo "<h1>It's hot!</h1>";
    }
    ?>