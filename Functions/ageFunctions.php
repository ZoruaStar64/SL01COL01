<?php

//Calculates the Portfolio owner's age.
function calculateAge($dateOfBirth, $currentDate) {
    $diff = date_diff($dateOfBirth, $currentDate);
    $diffDays = $diff->format("%a");
    $diffYears = round(($diffDays / 365), 1);
    return $diffYears;
}