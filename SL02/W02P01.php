<?php

/* Included Files */
include 'Functions/ageFunctions.php';

/* Required Variables */
$currentDate = date_create();

/**
 * Multidimensionale array met gegevens van onze team PSR.
 */
$PSR = [
    ['first_name' => 'Sander', 'last_name' => 'Borgman', 'date_of_birth' => '30-01-2003',
        'age' => calculateAge(date_create("30-01-2003"), $currentDate),
        'e-mail' => 'sanderb119@gmail.com', 'phone_number' => '(06) 12345678',
        'address' => 'someplace 456', 'hobbies' => ['Gaming', 'Watching videos'],
        'coding_languages' => ['HTML', 'CSS', 'JS', 'MySql', 'PHP', 'C#', 'Java', 'Lua'],
        'frameworks' => ['ReactJS', 'Laravel'], 'languages' => ['Dutch', 'English'],
        'graduations' => ['Software-Dev MBO-4, ROC Almere Buiten'], 'isEnrolled' => true],
    ['first_name' => 'Paul', 'last_name' => 'van Breda', 'date_of_birth' => '30-01-2003',
        'age' => calculateAge(date_create("30-01-2003"), $currentDate),
        'e-mail' => 'placeholder1@gmail.com', 'phone_number' => '(06) 12345678',
        'address' => 'someplace 789', 'hobbies' => ['hobby 1', 'hobby 2'],
        'coding_languages' => ['HTML', 'CSS', 'JS', 'MySql', 'PHP', 'Java',],
        'frameworks' => [''], 'languages' => ['Dutch', 'English'], 'graduations' => ['Software-Dev MBO-4, ROC Almere Buiten'],
        'isEnrolled' => true],
    ['first_name' => 'Rick', 'last_name' => 'Beniers', 'date_of_birth' => '30-01-2003',
        'age' => calculateAge(date_create("30-01-2003"), $currentDate),
        'e-mail' => 'placeholder2@gmail.com', 'phone_number' => '(06) 12345678',
        'address' => 'someplace 123', 'hobbies' => ['hobby 1', 'hobby 2'],
        'coding_languages' => ['HTML', 'CSS', 'JS', 'MySql', 'PHP', 'C#', 'Java'],
        'frameworks' => [''], 'languages' => ['Dutch', 'English', 'German'], 'graduations' => [''],
        'isEnrolled' => true],
];