<?php

/* Included Files */
include '../Functions/teamDetails.php';
$PSR = returnTeamDetails();

/**
 * This displays all the info in the team's respective arrays from the $PSR variable.
 */
$i = 0;
foreach ($PSR as $member) {
    echo "<h2>" . array_keys($PSR)[$i] . "</h2>";
    foreach ($member as $memberInfo => $value) {
        if (is_array($value)) {
            echo $memberInfo . " = ";
            foreach ($value as $arrayItem) {
                echo $arrayItem . ', ';
            }
            echo '<br>';
        }
        else {
            echo $memberInfo . " = " . $value . "<br>" ;
        }
    }
    echo '<hr>';
    $i++;
}