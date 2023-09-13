<?php
  $number1 = $_POST["number1"];
  $number2 = $_POST["number2"];
  $operation = $_POST["operation"];

  // Perform the selected operation
  $result = 0;

  switch ($operation) {
      case 'addition':
          $result = $number1 + $number2;
          break;
      case 'subtraction':
          $result = $number1 - $number2;
          break;
      case 'multiplication':
          $result = $number1 * $number2;
          break;
      case 'division':
          if ($number2 != 0) {
              $result = $number1 / $number2;
          } else{
              echo "<p>Error: Division by zero.</p>";
          }
          break;
      default:
          echo "<p>Invalid operation selected.</p>";
          break;
  }
  printf("<h1>Result: %.2f </h1>",$result);