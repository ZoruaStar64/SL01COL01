<?php

//This function gets called when $funnyVariable's datatype is an Array
//It then returns the array in string format so it can be properly displayed
function displayArrayData($funnyVariable) {
    $funnyText = "";
    for ($i = 0; $i < count($funnyVariable); $i++) {
        $funnyText .= $funnyVariable[$i];
        if ($i < (count($funnyVariable) - 1)) {
            $funnyText .= ",";
        }
    }

    return $funnyText;
}
//This function echo's various data about the given variable
function variableData($funnyVariable) {
    $funnyDataType = gettype($funnyVariable);
    $funnyAmount = 0;

    if ($funnyDataType == "string") {
        $funnyAmount = strlen($funnyVariable);
        echo "Type of funnyVariable is " . $funnyDataType .
            "<br>Value of funnyVariable is " . $funnyVariable .
            "<br>Amount of characters is " . $funnyAmount;
    } elseif ($funnyDataType == "integer") {
        $funnyAmount = $funnyVariable;
        echo "Type of funnyVariable is " . $funnyDataType .
            "<br>Value of funnyVariable is " . $funnyVariable .
            "<br>The Integer's number is " . $funnyAmount;
    } elseif ($funnyDataType == "array") {
        $funnyAmount = count($funnyVariable);
        echo "Type of funnyVariable is " . $funnyDataType .
            "<br>Value of funnyVariable is [" . displayArrayData($funnyVariable) . "]" .
            "<br>The counted amount of the array is " . $funnyAmount;
    } elseif ($funnyDataType == "boolean") {
        $funnyAmount = $funnyVariable;
        echo "Type of funnyVariable is " . $funnyDataType .
            "<br>Value of funnyVariable is " . (boolval($funnyAmount) ? "true" : "false") .
            "<br>The Boolean is " . (boolval($funnyAmount) ? "true" : "false");
    }
}

//This displays a random number from the Array.
//the + 1 is there so that it actually shows the chosen number and not it's position in the Array.
//Because arrays start at 0
function displayRandomArrayValue($theWheelOfFortune) {
    if (gettype($theWheelOfFortune) != "array") {
        echo "<hr> The wheel of fortune cannot be spun since an array wasn't given.";
        die;
    }
    $theChosenOne = $theWheelOfFortune[array_rand($theWheelOfFortune)];
    echo "<hr> The chosen number from the wheel of fortune is: " . $theChosenOne;
}