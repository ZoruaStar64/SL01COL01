<?php
/**
 * Define Variables
 * String, Integer, Float, Boolean, Array, Date
 */

$someString = "Hello I am someString.";
$someInteger = 4;
$someFloat = 1.6;
$someBoolean = 1;
$someIdiots = ["Lippo","Rippo","Nippo","Bippo","Zitto"];
$someDate = "06/09/2023";

$upperedString = ucfirst("flello");
$currentDate = date('D d F Y ');
$currentTime = date('H:i:s');

echo "<html>
    <body>
    <div>
    <p>Hello World!<br>$upperedString</p>
    <p>today is $currentDate <br> and the current time is $currentTime</p>";

// If Statement to check if someBoolean is true.
if ($someBoolean == true) {
    echo "<p>Hello Code!</p>";
}

// If statement to check if someInteger is higher than 4.
// Also includes an else statement for everything below 4.
if ($someInteger > 4) {
    echo "<p>$someInteger is a higher number than 4.</p>";
}
else {
    echo "<p>$someInteger is either equal to or a lower number than 4.</p>";
}

// If statement to check if someFloat is higher than 1.5.
// Also includes an else statement for everything below 1.5.
if ($someFloat > 1.5) {
    echo "<p>$someFloat is a higher number than 1.5.</p>";
}
else {
    echo "<p>$someFloat is either equal to or a lower number than 1.5.</p>";
}

// For loop that loops the content within is 3 times.
for ($i = 0; $i < 3; $i++) {
    echo "<p>The current loop iteration = $i</p>";
}

// Foreach loop that loops the total times of the content inside the given Array.
// It also makes/updates a new variable with the content of the current iteration of the array.
foreach ($someIdiots as $someIdiot) {
    echo "<p>Some idiot called $someIdiot" . ".</p>";
}
// Echos a string without any requirements/statements and closes the html doc.
echo "<p>$someString</p>
    </div>
    </body>
    </html";
?>