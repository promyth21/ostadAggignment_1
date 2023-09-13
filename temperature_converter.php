<?php
$cValue;
$temparatureInputScall = $_POST['temparatureInputScall'];
$temparatureValue = $_POST['temparatureValue'];
$temparatureOutputScall = $_POST['temparatureOutputScall'];
$outputValue;
function convertToCilcius($value, $scall)
{
    if ($scall == "F") {
        return ($value - 32) * 5 / 9;
    } elseif ($scall == "K") {
        return $value - 273.15;
    }
    elseif($scall=="C"){
        return $value;
    }
}
function celsiusToTemprature($value, $temparatureOutputScall)
{
    if($temparatureOutputScall == "C") {
        return $value;
    }elseif($temparatureOutputScall == "F") {
        return ($value * 9/5) + 32;
    }elseif ($temparatureOutputScall == "K") {
        return $value + 273.15;
    }
}
if ($temparatureInputScall == $temparatureOutputScall) {
    $outputValue=$temparatureValue;
    echo "Convertet Temparuture is : $outputValue  $temparatureOutputScall";
} else {
    if ($temparatureInputScall == "C") {
        $cValue = convertToCilcius($temparatureValue, "C");
        $outputValue=celsiusToTemprature($cValue,$temparatureOutputScall);
        echo "Convertet Temparuture is : $outputValue  $temparatureOutputScall";
    } elseif ($temparatureInputScall == "F") {
        $cValue = convertToCilcius($temparatureValue, "F");
        $outputValue=celsiusToTemprature($cValue,$temparatureOutputScall);
        echo "Convertet Temparuture is : $outputValue  $temparatureOutputScall";
    } elseif ($temparatureInputScall == "K") {
        $cValue = convertToCilcius($temparatureValue,"K");
        $outputValue=celsiusToTemprature($cValue,$temparatureOutputScall);
        echo "Convertet Temparuture is : $outputValue  $temparatureOutputScall";
    }

}

?>