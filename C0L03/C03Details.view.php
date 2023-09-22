<?php
include "../Functions/teamDetails.php";
include "../Functions/displayFunctions.php";

//Uses the GET parameter from last/this page's link to obtain the details of the selected member.
$memberDetails = getMemberDetails($_GET);
//Quick if statement to display the enrolled value in readable text
if ($memberDetails["isEnrolled"]) {
    $enrolled = "yes";
} else {
    $enrolled = "no";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>W03P01</title>
    <link rel='stylesheet' href='../C0L01/W01P01.css'>
</head>
<body>
<header>
</header>
<main>
    <section class='personalDetailsBox'>
        <div id='wrapper' class='personalInfoBox'>
            <h2 style='margin-right: 2em'>Personal Details:</h2>
            <p>First name: <?php echo $memberDetails["first_name"] ?> | Last name: <?php echo $memberDetails["last_name"] ?>
                <br>Email: <?php echo $memberDetails["e-mail"] ?> | Phone Number: <?php echo $memberDetails["phone_number"] ?>
                <br>Date of birth: <?php echo $memberDetails["date_of_birth"] ?> | Age: <?php echo $memberDetails["age"] ?> years old
                <br>Address: <?php echo $memberDetails["address"] ?> | Currently enrolled in a school: <?php echo $enrolled ?></p>
        </div>
        <div id='wrapper'>
            <div class='codingLanguageBox'>
                <h3>Known Coding languages:</h3>
                <?php echo displayCodingLanguages($memberDetails["coding_languages"]) ?>
            </div>
            <div class='frameworkBox'>
                <h3>Known Frameworks/Libraries:</h3>
                <?php echo displayFrameworks($memberDetails["frameworks"]) ?>
            </div>
        </div>
        <div id='wrapper'>
            <div class='hobbyBox'>
                <h3>Hobbies:</h3>
                <?php echo displayHobbies($memberDetails["hobbies"]) ?>
            </div>
            <div class='languageBox'>
                <h3>Known languages:</h3>
                <?php echo displayLanguages($memberDetails["languages"]) ?>
            </div>
        </div>
        <div class='graduationBox'>
            <h3>Achieved graduations:</h3>
            <?php echo displayGraduations($memberDetails["graduations"]) ?>
        </div>
    </section>
</main>
<footer>
    <p>&copy;copyright PSR 2023</p>
</footer>
</body>
</html>
