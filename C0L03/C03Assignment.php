<?php

// Included Files
include "../Functions/teamDetails.php";

$PSR = returnTeamDetails();
$i = 0;
foreach ($PSR as $teamMember) {
    echo "<div>
    <h1>Team member details</h1>
    <h2>
        <a href='C03Details.view.php?". array_keys($PSR)[$i] ."'>" . array_keys($PSR)[$i] . "'s details</a>
    </h2>    
</div>
";
    $i++;
}