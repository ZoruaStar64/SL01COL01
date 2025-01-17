<?php
/* Included Files */
include '../Functions/ageFunctions.php';

function returnTeamDetails()
{
    /* Required Variables */
    $currentDate = date_create();
     /**
     * Multidimensionale Associative array met gegevens van onze team PSR.
     */
    return $PSR = [
        'sander' => ['first_name' => 'Sander', 'last_name' => 'Borgman', 'date_of_birth' => '30-01-2003',
            'age' => calculateAge(date_create("30-01-2003"), $currentDate), 'height' => 1.81,
            'e-mail' => 's1198081@student.windesheim.nl', 'phone_number' => '(06) 12345678',
            'address' => 'someplace 456', 'hobbies' => ['Gaming', 'Watching videos'],
            'coding_languages' => ['HTML', 'CSS', 'JS', 'MySql', 'PHP', 'C#', 'Java', 'Lua'],
            'frameworks' => ['ReactJS', 'Laravel'], 'languages' => ['Dutch', 'English'],
            'graduations' => ['Software-Dev MBO-4, ROC Almere Buiten'], 'isEnrolled' => true],
        'paul' => ['first_name' => 'Paul', 'last_name' => 'van Breda', 'date_of_birth' => '19-11-2001',
            'age' => calculateAge(date_create("19-11-2001"), $currentDate), 'height' => 1.84,
            'e-mail' => 's1200548@student.windesheim.nl', 'phone_number' => '(06) 87654321',
            'address' => 'someplace 789', 'hobbies' => ['hobby 1', 'hobby 2'],
            'coding_languages' => ['HTML', 'CSS', 'JS', 'MySql', 'PHP', 'Java',],
            'frameworks' => ['placeholderframework'], 'languages' => ['Dutch', 'English'],
            'graduations' => ['Software-Dev MBO-4, ROC Almere Buiten'],
            'isEnrolled' => true],
        'rick' => ['first_name' => 'Rick', 'last_name' => 'Beniers', 'date_of_birth' => '30-01-2003',
            'age' => calculateAge(date_create("30-01-2003"), $currentDate), 'height' => 1.81,
            'e-mail' => 'placeholder@gmail.com', 'phone_number' => '(06) 56789123',
            'address' => 'someplace 123', 'hobbies' => ['hobby 1', 'hobby 2'],
            'coding_languages' => ['HTML', 'CSS', 'JS', 'MySql', 'PHP', 'C#', 'Java'],
            'frameworks' => ['placeholderframework'], 'languages' => ['Dutch', 'English', 'German'],
            'graduations' => ['placeholdergraduation'],
            'isEnrolled' => true],
    ];
}

//Returns the selected member's details so it can be displayed on the view page.
function getMemberDetails($selectedMember) {
    $PSR = returnTeamDetails();
    return $memberDetails = $PSR[array_keys($selectedMember)[0]];
}