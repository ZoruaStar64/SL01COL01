<?php

require '../Functions/C0L03Tools.php';
include '../Classes/C0L03Tools.php';
include '../Views/W03P01.view.php';

$tools = new \Classes\C0L03Tools();
/**
 * Schrijf een functie waarbij de kleur van de pagina
 * bepaald wordt op basis van tijd
 */
//I already made this function it's in here.
include '../Functions/colorFunctions.php';

echo "<style>body { background-color: ". decideBackgroundColor($tools->sendTimeColors()) ."}</style>";

/**
 * Schrijf een functie waarbij de waarde van een variable getoond wordt, hoeveel het
 * er zijn en welk type het is.
 */
variableData(5);

/**
 * Schrijf een functie waarbij een array random een andere waarde toont vanuit de array
 */
displayRandomArrayValue([1,2,3,4,5,6,7,8,9]);

/**
 * Verplaats alles naar een function directory, en require de function file.
 */
//The require is at the top of this file.

/**
 * Haal de presentatie van een variabele binnen
 */
//Alles wat ik wil hebben moet ik aanroepen via de view (in de view een foreach voor player bvb)

//Je kan ook nog een classes directory maken een daarin een class maken (met misschien een method erin)

