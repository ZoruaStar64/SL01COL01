<!-- First assignment for SD-AD -->
<?php

//Included php files
include '../Functions/displayFunctions.php';
include '../Functions/colorFunctions.php';
include '../Functions/ageFunctions.php';

/**
 * Initiating Variables...
 */

//General Variables.
$currentDate = date_create();
$currentTime = date('H:i:s');
$timeBackgroundColors = [
    'Sunrise' => "#ff6700",
    'Midnight' => "#191970",
    'Day' => "#edd59e",
    'Midday' => "#ee5d6c",
    'Night' => "#6a0d83",
];

//Portfolio owner Variables.
$firstName = "Bobby";
$lastName = "Bobbinson";
$email = "bobbybobbin409@gmail.com";
$phoneNumber = "(06) 49204819";
$dateOfBirth = date_create("07-03-2000");
$age = calculateAge($dateOfBirth, $currentDate);
$address = "Fakeplace 193";
$hobbies = ["Gaming", "Coding", "Reading"];
$knowledgeLanguages = ["HTML", "CSS", "JS", "MySql", "PHP", "C#", "Java", "Lua"];
$knowledgeFrameworks = ["React", "Laravel"];
$actualLanguages = ["Dutch", "English", "German"];
$graduations = ["Software-Dev MBO-4, ROC Almere Buiten"];
$isEnrolled = true;

if ($isEnrolled) {
    $enrolled = "yes";
} else {
    $enrolled = "no";
}

/*    $currentMArray = 0;
    foreach ($multidimensionalArrayEx as $arrayEx) {
        echo 'i am array number ' . $currentMArray . '! <br>';
        $currentMArray++;
        foreach ($arrayEx as $value) {
            echo $value . '<br>';
        }
    }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PortfolioApp</title>
    <link rel='stylesheet' href='W01P01.css'>
</head>
<body style='background-color: <?php echo decideBackgroundColor($timeBackgroundColors) ?> '>
<header>
    <img src="./logo.png" alt="Either PSR logo or a custom one for the app">
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="./about_us.html">About Us</a></li>
            <li><a href="./register.html">Register</a></li>
            <li><a href="./login.html">Login</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class='personalDetailsBox'>
        <div id='wrapper' class='personalInfoBox'>
            <h2 style='margin-right: 2em'>Personal Details:</h2>
            <p>First name: <?php echo $firstName ?> | Last name: <?php echo $lastName ?>
                <br>Email: <?php echo $email ?> | Phone Number: <?php echo $phoneNumber ?>
                <br>Date of birth: <?php echo $dateOfBirth->format("d-m-Y") ?> | Age: <?php echo $age ?> years old
                <br>Address: <?php echo $address ?> | Currently enrolled in a school: <?php echo $enrolled ?></p>
        </div>
        <div id='wrapper'>
            <div class='codingLanguageBox'>
                <h3>Known Coding languages:</h3>
                <?php echo displayCodingLanguages($knowledgeLanguages) ?>
            </div>
            <div class='frameworkBox'>
                <h3>Known Frameworks/Libraries:</h3>
                <?php echo displayFrameworks($knowledgeFrameworks) ?>
            </div>
        </div>
        <div id='wrapper'>
            <div class='hobbyBox'>
                <h3>Hobbies:</h3>
                <?php echo displayHobbies($hobbies) ?>
            </div>
            <div class='languageBox'>
                <h3>Known languages:</h3>
                <?php echo displayLanguages($actualLanguages) ?>
            </div>
        </div>
        <div class='graduationBox'>
            <h3>Achieved graduations:</h3>
            <?php echo displayGraduations($graduations) ?>
        </div>
    </section>
</main>
<footer>
    <p>&copy;copyright PSR 2023</p>
</footer>
</body>
</html
