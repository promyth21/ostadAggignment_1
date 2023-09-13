<?php

        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        echo "<p>between $number1 and $number2 The larger number is: $largerNumber</p>";
    ?>